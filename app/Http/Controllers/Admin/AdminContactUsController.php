<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{
    public function index()
    {
    	$contactLists = ContactUs::all();
    	$data = ['page_title' => 'Contact Us || Covid Clinic', 'contactLists' => $contactLists];
    	return view('admin.page.contact-us', $data);
    }

    public function contactUsPage()
    {
    	$page = Page::where('title', 'Contact Us')->first();    	
    	$data = ['page_title' => 'Contact Us || Covid Clinic', 'page' => $page];
    	return view('admin.page.contact-us.contact-us', $data);
    }

    public function store(Request $request)
    {    	
        $desc = [
            'contact_us' => $request->contact_us,
            'sub_title' => $request->sub_title,            
        ];

        $description = serialize($desc);

        Page::updateOrCreate([
            'id'   => $request->id,
        ],[
            'title' => $request->title,
            'description' => $description,
        ]);
    	
    	return response()->json([
            'success' => true,
            'message' => "Done!",
        ]);
    }
}
