<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\PatientReportDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
// use Carbon\Carbon;
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
}
