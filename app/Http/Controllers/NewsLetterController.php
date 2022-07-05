<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;
use App\Models\User;

class NewsLetterController extends Controller
{
    public function index(Request $request)
    {
        $subscribers = NewsLetter::get();
        $data = ['page_title' => 'News Letter || Admin', 'subscribers' => $subscribers];
        return view('admin.page.news-letter.index', $data);
    }

    public function subscribe(Request $request)
    {
    	if (User::where('email', $request->email)->exists()) {
    		$success = false;
    		$message = 'This email is already exist!';
    	} else {
    		if (NewsLetter::where('email', $request->email)->exists()) {
    			$success = false;
	    		$message = 'This email has already subscribed!';
    		} else {
	    		NewsLetter::create($request->all());
	    		$success = true;
	    		$message = 'Subscribed!';
    		}
    	}
    	return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function deleteSubscriber(Request $request)
    {
        NewsLetter::where('id', $request->id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Subscriber has been deleted!',
        ]);
    }
}
