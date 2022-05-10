<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;
use App\Models\User;

class NewsLetterController extends Controller
{
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
}
