<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
    	return view('frontend.page.faq');
    }

    public function faq()
    {
    	return view('admin.page.faq');
    }
}
