<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{
    public function index()
    {
    	$contactLists = ContactUs::all();
    	$data = ['page_title' => 'Contact Us || Covid Clinic', 'contactLists' => $contactLists];
    	return view('admin.page.contact-us', $data);
    }
}
