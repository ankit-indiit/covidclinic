<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Page;
use Illuminate\Http\Request;
use Auth;

class AdminHomeController extends Controller
{
    public function howItworkImage($image)
    {
        $file = $image;       
        $imageName = Str::random(8) . '_' . Auth::user()->id . '.' . $file->getClientOriginalExtension();
        $destinationPath = public_path('/images/how-it-works');
        $file->move($destinationPath, $imageName);
        return $imageName;    
    }

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
        $page = Page::where('title', 'Home')->first();
        $firstImage = $request->file('first_image') ? $this->howItworkImage($request->file('first_image')) : @$page->desc['first_image'];
        $secondImage = $request->file('second_image') ? $this->howItworkImage($request->file('second_image')) : @$page->desc['second_image'];
        $thirdImage = $request->file('third_image') ? $this->howItworkImage($request->file('third_image')) : @$page->desc['third_image'];
        $fourthImage = $request->file('fourth_image') ? $this->howItworkImage($request->file('fourth_image')) : @$page->desc['fourth_image'];
        $desc = [
            'description' => $request->description,
            'sub_title' => $request->sub_title,
            'book_now' => $request->book_now,
            'my_result' => $request->my_result,
            'about' => $request->about,
            'know_more' => $request->know_more,
            'how_it_works' => $request->how_it_works,
            'first_image' => $firstImage,
            'first_title' => $request->first_title,
            'first_sub_title' => $request->first_sub_title,
            'second_image' => $secondImage,
            'second_title' => $request->second_title,
            'second_sub_title' => $request->second_sub_title,
            'third_image' => $thirdImage,
            'third_title' => $request->third_title,
            'third_sub_title' => $request->third_sub_title,
            'fourth_image' => $fourthImage,
            'fourth_title' => $request->fourth_title,
            'fourth_sub_title' => $request->fourth_sub_title,
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
