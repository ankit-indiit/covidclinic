<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\NearestLocation;
use App\Models\Page;
use Illuminate\Http\Request;
use Auth;

class AdminNearestLocationController extends Controller
{
    public function index()
    {
        $locations = NearestLocation::get();
        $page = Page::where('title', 'Nearest Location')->first();
    	$data = ['page_title' => 'Nearest Location || Covid Clinic', 'locations' => $locations, 'page' => $page];
    	return view('admin.page.nearest-location.index', $data);
    }

    public function create(Request $request)
    {
        $data = ['page_title' => 'Create Nearest Location || Covid Clinic'];
        return view('admin.page.nearest-location.create', $data);
    }

    public function store(Request $request)
    {
        if (!empty($request->section_title) && $request->section_title != '') {
            $desc = [
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ];
            $description = serialize($desc);
            Page::updateOrCreate([
                'id'   => $request->id,
            ],[
                'title' => 'Nearest Location',
                'description' => $description,
            ]);
            $message = 'Section title has been created!';
        } else {
            if ($request->file('location_image')) {
                $image = $request->file('location_image');
                $imagename = time() . '_' . Auth::user()->id . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/nearest-location');
                $image->move($destinationPath, $imagename);
                $image = $imagename;
            }

            $request['image'] = $image;        
            NearestLocation::create($request->all());
            $message = 'Location has been created!';
        }
    	
    	return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $location = NearestLocation::where('id', $id)->first();
        $data = ['page_title' => 'Edit Nearest Location || Covid Clinic', 'location' => $location];
        return view('admin.page.nearest-location.edit', $data);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('location_image')) {
            $file_path = 'images/nearest-location/'.$request->old_image;
            if(File::exists($file_path)) { 
                File::delete($file_path); 
            }
            $image = $request->file('location_image');
            $imagename = time() . '_' . Auth::user()->id . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/nearest-location');
            $image->move($destinationPath, $imagename);
            $location = [
                'title' => $request->title,
                'address' => $request->address,
                'working_hour' => $request->working_hour,
                'mobile_no' => $request->mobile_no,
                'image' => $imagename,
                'link' => $request->link,
            ];
        } else {
            $location = [
                'title' => $request->title,
                'address' => $request->address,
                'working_hour' => $request->working_hour,
                'mobile_no' => $request->mobile_no,
                'link' => $request->link,
            ];
        }

        NearestLocation::where('id', $id)->update($location);
        return response()->json([
            'success' => true,
            'message' => "Address has been updated!!",
        ]);
    }

    public function destroy(Request $request, $id)
    {
        NearestLocation::where('id', $id)->delete();
        return response()->json([
            'success' => true,
            'message' => "Address has been deleted!!",
        ]);
    }
}
