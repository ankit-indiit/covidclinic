<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PatientReportDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use App\Models\PatientReport;
use App\Models\IncorrectReport;
use Notification;
use App\Notifications\IncorrectReportNotification;
use Carbon\Carbon;
use Auth;

class PatientController extends Controller
{
    public function loginForm()
    {
    	return view('frontend.patient.patient-login');
    }
    
    public function login(Request $request)
    {    	
    	if (User::where('phone_number', $request->phone_number)
    			->where('dob', Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d'))
    			->exists()) {
    		$user = User::where('phone_number', $request->phone_number)
    			->where('dob', Carbon::createFromFormat('d/m/Y', $request->dob)->format('Y-m-d'))
    			->first();
    		Auth::login($user);
    		Alert::success('Success', 'Logged in successfully!');
    		return redirect()->route('reports');
    	} else {
    		Alert::error('Error', 'Please enter valid login detail!');
    		return redirect()->route('patient-login');
    	}
    }

    public function reports(PatientReportDataTable $dataTable, Request $request)
    {
     	return $dataTable->with('filter', $request->all())->render('frontend.clinic.patient-reports'); 
    }

    public function reportIncorrect(Request $request)
    {
        $user = User::findOrFail(Auth::user()->clinic_id);
        $reportId = \Crypt::decrypt($request->reportId);
        $request['report_id'] = $reportId;
        $request['status'] = 1;
        IncorrectReport::create($request->all());

        $notification = new \stdClass();
        $notification->body = getUserNameById(Auth::user()->id).' has reported to incurrect result!';
        $notification->sender_id = Auth::user()->id;
        $notification->report_id = $reportId;
        $notification->actionURL = url("/");
        
        $notidicationId = Notification::send($user, new IncorrectReportNotification($notification));
        return response()->json([
            'success' => true,
            'message' => 'Reported Successfully!',
        ]);
    }
}
