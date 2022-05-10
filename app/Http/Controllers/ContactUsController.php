<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
    	return view('frontend.page.contact-us');
    }

    public function contact(Request $request)
    {
    	ContactUs::create($request->all());
    	return response()->json([
            'success' => true,
            'message' => 'Done!',
        ]);
    }
}
