<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use App\ModelFilters\PatientReportFilter;
use DataTables;
use App\DataTables\PatientDataTable;
use App\DataTables\PatientReportDataTable;
use App\Models\User;
use App\Models\PatientEthnicity;
use App\Models\PaymentStatus;
use App\Models\PatientRace;
use App\Models\PatientSymptom;
use App\Models\PatientReport;
use Dompdf\Dompdf;
use Dompdf\Options;
use Auth;
use PDF;

class ClinicController extends Controller
{
    public function index()
    {
    	return view('frontend.clinic.clinic-login');
    }

    public function profile()
    {
    	return view('frontend.clinic.clinic-profile');
    }

    public function updateProfile(Request $request)
    {
    	User::where('id', Auth::user()->id)->update([
    		'facility' => $request->facility,
            'first_name' => $request->first_name,
    		'last_name' => $request->last_name,
    		'username' => $request->username,
    		'phone_number' => $request->phone_number,
    		'city' => $request->city,
            'state' => $request->state,
    		'zip_code' => $request->zip_code,
    		'address1' => $request->address,
    	]);
    	return response()->json([
            'success' => true,
            'message' => 'Profile has been updated!',
        ]);
    }

    public function updatePassword(Request $request)
    {
    	if (Hash::check($request->password, Auth::user()->password)) {
    		User::where('id', Auth::user()->id)->update([
	    		'password' => Hash::make($request->confirm_password),
	    	]);
	    	$success = true;
	    	$message = 'Password has been updated!';
    	} else {
    		$success = false;
	    	$message = 'Please enter a valid current password!';
    	}
    	
    	return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function updateProfileImage(Request $request)
    {
    	if ($request->file('userImage')) {
    		$image = $request->file('userImage');
            $imagename = time() . '_' . Auth::user()->id . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user');
            $image->move($destinationPath, $imagename);
            $image = $imagename;	    	
            User::where('id', Auth::user()->id)->update([
	    		'image' => $image,
	    	]);

            $file_path = 'images/user/'.Auth::user()->fake_image;
            if(File::exists($file_path)) { 
                File::delete($file_path); 
            }
    	}
    	return response()->json([
            'success' => true,
            'message' => 'Profile image has been uploded!',
            'data' => $image,
        ]);
    }

    public function patients(PatientDataTable $dataTable, Request $request)
    {
    	return $dataTable->render('frontend.clinic.patient');        
    }

    public function clinicPatient()
    {
        $patientEthnicites = PatientEthnicity::all();
        $paymentStatuses = PaymentStatus::all();
        $patientRaces = PatientRace::all();
        $patientSymptoms = PatientSymptom::all();
        $data = ['page_title' => 'Add Patient | Covid Clinic', 'patientEthnicites' => $patientEthnicites, 'paymentStatuses' => $paymentStatuses, 'patientRaces' => $patientRaces, 'patientSymptoms' => $patientSymptoms];
        return view('frontend.clinic.add-patient', $data);
    }

    public function addPatient(Request $request)
    {
        if ($request->pregnancy == 'on') {
            $request['pregnancy'] = 1;
        }
        $request['password'] = Hash::make($request->phone_number);
        $request['role'] = 'patient';
        $request['symptom'] = serialize($request->symptom);
        User::create($request->all());
        $data = ['page_title' => 'Add Patient | Covid Clinic'];
        return response()->json([
            'success' => true,
            'message' => 'Patient has been added!',
        ]);
    }

    public function editPatient(Request $request, $id)
    {
        $patientId = Crypt::decrypt($id);
        $patientEthnicites = PatientEthnicity::all();
        $paymentStatuses = PaymentStatus::all();
        $patientRaces = PatientRace::all();
        $patientSymptoms = PatientSymptom::all();
        $patientDetail = User::where('id', $patientId)->first();
        $data = ['page_title' => 'Edit Patient | Covid Clinic', 'patientEthnicites' => $patientEthnicites, 'paymentStatuses' => $paymentStatuses, 'patientRaces' => $patientRaces, 'patientSymptoms' => $patientSymptoms, 'patientDetail' => $patientDetail];
        return view('frontend.clinic.edit-patient', $data);
    }

    public function updatePatient(Request $request)
    {
        if ($request->pregnancy == 'on') {
            $request['pregnancy'] = 1;
        }
        $request['symptom'] = serialize($request->symptom);
        User::where('id', $request->patientId)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'mrn' => $request->mrn,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zipcode,
            'ethnicity' => $request->ethnicity,
            'payment_status' => $request->payment_status,
            'passport' => $request->passport,
            'custom_info' => $request->custom_info,
            'pregnancy' => $request->pregnancy,
            'race' => $request->race,
            'symptom' => $request->symptom,
        ]);
        $data = ['page_title' => 'Edit Patient | Covid Clinic'];
        return response()->json([
            'success' => true,
            'message' => 'Patient has been updated!',
        ]);
    }

    public function patientReports(PatientReportDataTable $dataTable, Request $request, $id)
    {
        $patientId = Crypt::decrypt($id);
        return $dataTable->with('patientId', $patientId)->with('filter', $request->all())->render('frontend.clinic.patient-reports');        
    }

    public function addReportForm(Request $request, $id)
    {
        $patientId = Crypt::decrypt($id);
        $data = ['page_title' => 'Add Patient Report', 'patientId' => $patientId];
        return view('frontend.clinic.add-patient-report', $data);
    }

    public function addPatientReport(Request $request)
    {
        if ($request->file('report')) {
            $image = $request->file('report');
            $imagename = time() . '_' . Auth::user()->id . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/patient-reports');
            $image->move($destinationPath, $imagename);
            $image = $imagename;            
            PatientReport::create([
                'patient_id' => $request->patient_id,
                'title' => $request->title,
                'specimen_type' => $request->specimen_type,
                'status' => $request->status,
                'report' => $image,
                'reg_date' => $request->reg_date,
            ]);            
        } else {
            PatientReport::create([
                'patient_id' => $request->patient_id,
                'title' => $request->title,
                'specimen_type' => $request->specimen_type,
                'status' => $request->status,
                'reg_date' => $request->reg_date,
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Report has been created!',
        ]);
    }

    public function editPatientReport(Request $request, $id)
    {
        $reportId = Crypt::decrypt($id);
        $editPatientReport = PatientReport::where('id', $reportId)->first();
        $data = ['page_title' => 'Add Patient Report', 'editPatientReport' => $editPatientReport];
        return view('frontend.clinic.edit-patient-report', $data);
    }

    public function updatePatientReport(Request $request)
    {
        if ($request->file('report')) {
            $image = $request->file('report');
            $imagename = time() . '_' . Auth::user()->id . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/patient-reports');
            $image->move($destinationPath, $imagename);
            $image = $imagename;            
            PatientReport::where('id', $request->report_id)->update([
                'title' => $request->title,
                'specimen_type' => $request->specimen_type,
                'status' => $request->status,
                'report' => $image,
                'reg_date' => $request->reg_date.' '.date('H:i:s'),
            ]);            

        } else {
            PatientReport::where('id', $request->report_id)->update([
                'title' => $request->title,
                'specimen_type' => $request->specimen_type,
                'status' => $request->status,
            ]); 
        }
        return response()->json([
            'success' => true,
            'message' => 'Report has been updated!',
        ]);
    }

    public function reportDetail(Request $request, $id)
    {
        $reportId = Crypt::decrypt($id);
        $reportDetail = PatientReport::where('id', $reportId)->first();
        $patientDetail = User::where('id', $reportDetail->patient_id)->first();        
        $clinicDetail = User::where('id', $patientDetail->clinic_id)->first();        
        // $clinicDetail = Auth::user();        
        $data = ['page_title' => 'Add Patient Report', 'reportDetail' => $reportDetail, 'patientDetail' => $patientDetail, 'clinicDetail' => $clinicDetail];
        return view('frontend.clinic.report-detail', $data);
    }

    public function downloadPdf(Request$request, $id)
    {
        $reportId = Crypt::decrypt($id);
        $patientReport = PatientReport::where('id', $reportId)->first();
        $patientDetail = User::where('id', $patientReport->patient_id)->first();        
        $clinicDetail = Auth::user();      
        $data = ['patientReport' => $patientReport, 'patientDetail' => $patientDetail, 'clinicDetail' => $clinicDetail];       
        $pdf = PDF::loadView('frontend.download-pdf.patient-report', $data);
        return $pdf->download(''.$patientReport->title.'.pdf');
    }

    public function printReport(Request $request, $id)
    {
        $reportId = Crypt::decrypt($id);
        $patientReport = PatientReport::where('id', $reportId)->first();
        $patientDetail = User::where('id', $patientReport->patient_id)->first();        
        $clinicDetail = Auth::user();

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $options->set('isRemoteEnabled', TRUE);
        $options->set('debugKeepTemp', TRUE);
        $options->set('isHtml5ParserEnabled', true);
        $dompdf = new Dompdf($options);
        $html = view('frontend.download-pdf.patient-report', compact('patientReport', 'patientDetail', 'clinicDetail'));
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        return $dompdf->stream($patientReport->title, array("Attachment"=>0));
    }
}
