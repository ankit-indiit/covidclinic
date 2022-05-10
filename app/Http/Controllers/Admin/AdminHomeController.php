<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
    	$page = Page::where('title', 'Home')->first();
    	$data = ['page_title' => 'Contact Us || Covid Clinic', 'page' => $page];
    	return view('admin.page.home.index', $data);
    }

    public function create(Request $request)
    {
    	$data = ['page_title' => 'Home Page || Covid Clinic'];
    	return view('admin.page.home.create', $data);
    }

    public function store(Request $request)
    {
    	if (Page::where('title', $request->title)->exists()) {            
    		Page::where('title', $request->title)->update([
	    		'title' => $request->title,
	    		'description' => $request->description,
	    	]);
	    	$message = $request->title.' page content has been updated!';
    	} else {
	    	Page::create([
	    		'title' => $request->title,
	    		'description' => $request->description,
	    	]);
	    	$message = $request->title.' page content has been added!';
    	}    	
    	return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }

    public function show(Request $request, $id)
    {
    	$data = ['page_title' => 'Contact Us || Covid Clinic'];
    	return view('admin.page.home.index', $data);
    }

    public function edit(Request $request, $id)
    {
    	$data = ['page_title' => 'Contact Us || Covid Clinic'];
    	return view('admin.page.home.index', $data);
    }

    public function update(Request $request, $id)
    {
    	$data = ['page_title' => 'Contact Us || Covid Clinic'];
    	return view('admin.page.home.index', $data);
    }

    public function destroy(Request $request, $id)
    {
    	$data = ['page_title' => 'Contact Us || Covid Clinic'];
    	return view('admin.page.home.index', $data);
    }

}
