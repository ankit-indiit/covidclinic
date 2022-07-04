<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NearestLocation;
use App\Models\Page;

class NearestLocationUsController extends Controller
{
    public function index()
    {
    	$locations = NearestLocation::get();
    	$locationTitle = Page::where('title', 'Nearest Location')->first();
    	return view('frontend.page.nearest-location', compact('locations', 'locationTitle'));
    }
}
