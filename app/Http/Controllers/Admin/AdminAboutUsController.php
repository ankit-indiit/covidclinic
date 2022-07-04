<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminAboutUsController extends Controller
{
    public function index()
    {
    	$page = Page::where('title', 'About Us')->first();
    	$data = ['page_title' => 'Contact Us || Covid Clinic', 'page' => $page];
    	return view('admin.page.about-us.about-us', $data);
    }

    public function store(Request $request)
    {
        $desc = [
            'about_us' => $request->about_us,
            'who_we_are' => $request->who_we_are,                     
        ];

        $description = serialize($desc);

        Page::updateOrCreate([
            'id'   => $request->id,
        ],[
            'title' => 'About Us',
            'description' => $description,
        ]);
    	
    	return response()->json([
            'success' => true,
            'message' => "Done!",
        ]);
    }
}
