<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class AboutUsController extends Controller
{
    public function index()
    {
    	$data = Page::where('title', 'About Us')->first();        
        $home = Page::where('title', 'Home')->first();
    	return view('frontend.page.about-us', compact('data', 'home'));
    }
}
