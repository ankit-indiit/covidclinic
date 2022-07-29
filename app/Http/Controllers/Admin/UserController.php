<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\PatientReport;
use Auth;
use Hash;

class UserController extends Controller
{
	public function adminLoginForm()
	{
		return view('admin.page.login');
	}

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password', 'role');
        if (Auth::attempt($credentials)) {
            return redirect()->route('profile')
                ->withSuccess('You have Successfully loggedin!');
        }
  
        return redirect("admin-login-form")->withError('Oppes! You have entered invalid credentials');
    }

	public function profile()
	{
		$user = Auth::user();
    	$data = ['page_title' => 'Profile || Covid Clinic', 'user' => $user];
        return view('admin.page.profile', $data);
	}

    public function users(Request $request, $role)
    {
    	$users = User::where('role', $role)->get();
    	$data = ['page_title' => 'Clinic || Covid Clinic', 'users' => $users];
        if ($role == 'clinic') {
            return view('admin.page.user.clinic.clinic', $data);
        } elseif ($role == 'patient') {
            return view('admin.page.user.patient.patient', $data);
        }        
    }   

    public function addUserForm(Request $request, $role)
    {
        $data = ['page_title' => 'Clinic || Covid Clinic'];
        if ($role == 'clinic') {
            return view('admin.page.user.clinic.add-clinic', $data);
        } else {
            return view('admin.page.user.patient.add-patient', $data);
        }
    }

    public function addUser(Request $request) 
    {
        $request['password'] = Hash::make($request->password);              
        User::create($request->all());                
        return response()->json([
            'success' => true,
            'message' => ucfirst($request->role).' has been added!',
        ]);
    }

    public function editUser(Request $request, $id)
    {
        $userId = Crypt::decrypt($id);
        $editUser = User::where('id', $userId)->first();
        if ($editUser->role == 'clinic') {
            return view('admin.page.user.clinic.edit-clinic', compact('editUser')); 
        } else {
            return view('admin.page.user.patient.edit-patient', compact('editUser')); 
        }        
    }

    public function updateUser(Request $request)
    {
        if ($request->password) {
            $userData = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'phone_number' => $request->phone_number,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'city' => $request->city,
                'state' => $request->state,
                'zip_code' => $request->zip_code,
                'password' => Hash::make($request->password),
            ];
        } else {
            $userData = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'phone_number' => $request->phone_number,
                'dob' => $request->dob,
                'gender' => $request->gender,
                'address1' => $request->address1,
                'address2' => $request->address2,
                'city' => $request->city,
                'state' => $request->state,
                'zip_code' => $request->zip_code,
            ];
        }
        $editUser = User::where('id', $request->id)->update($userData);
        return response()->json([
            'success' => true,
            'message' => ucfirst($request->role).' has been updated!',
        ]); 
    }

    public function deleteUser(Request $request)
    {
        User::where('id', $request->id)->delete();
        return response()->json([
            'success' => true,
            'message' => ucfirst($request->role).' has been deleted!',
        ]);
    }

    public function updateAdminProfile(Request $request)
    {
        User::where('id', Auth::user()->id)->update($request->except(['_token']));
        return response()->json([
            'success' => true,
            'message' => 'Profile has been updated!',
        ]);
    }

    public function updateAdminPassword(Request $request)
    {        
        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->confirm_password),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Password has been updated!',
        ]);
    }

    public function patientReport(Request $request, $userId)
    {
        $id = Crypt::decrypt($userId);
        $reports = PatientReport::where('patient_id', $id)->get();
        return view('admin.page.user.patient.report', compact('reports'));
    }

    public function viewReportDetail(Request $request, $reportId, $userId)
    {
        $patientDetail = User::where('id', $userId)->first();
        $report = PatientReport::where('id', $reportId)->first();        
        $clinicDetail = User::where('id', $patientDetail->clinic_id)->first();
        return view('admin.page.user.patient.report-detail', compact('report', 'patientDetail', 'clinicDetail'));
    }

    public function deleteReport(Request $request)
    {
        PatientReport::where('id', $request->id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Report has been deleted!',
        ]);
    }
}
