<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NearestLocationUsController extends Controller
{
    public function index()
    {
    	return view('frontend.page.nearest-location');
    }
}
