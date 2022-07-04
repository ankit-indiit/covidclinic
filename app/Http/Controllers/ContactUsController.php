<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Page;
use Mail; 
use App\Mail\ContactUsMail;


class ContactUsController extends Controller
{
    public function index()
    {
        $data = Page::where('title', 'Contact Us')->first();
    	return view('frontend.page.contact-us', compact('data'));
    }

    public function contact(Request $request)
    {
    	ContactUs::create($request->all());
        $data = [
            'name' => $request->first_name.' '.$request->last_name,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ];
        Mail::to('ankitindiit@gmail.com')->send(new ContactUsMail($data));
    	return response()->json([
            'success' => true,
            'message' => 'Done!',
        ]);
    }
}
