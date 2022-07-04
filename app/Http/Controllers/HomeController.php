<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\NearestLocation;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $home = Page::where('title', 'Home')->first();
        $locationTitle = Page::where('title', 'Nearest Location')->first();
        $locations = NearestLocation::get();       
        $data = ['page_title' => 'Home || Covid Clinic', 'home' => $home, 'locations' => $locations, 'locationTitle' => $locationTitle];
        return view('frontend.page.index', $data);
    }

    public function dashboard()
    {
        return view('admin.page.dashboard');
    }
}
