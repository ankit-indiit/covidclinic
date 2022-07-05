<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function allFaq()
    {
        $faqs = Faq::get();
        $data = ['page_title' => 'FAQ Page || Covid Clinic', 'faqs' => $faqs];
    	return view('frontend.page.faq', $data);
    }

    public function index()
    {
    	$faqs = Faq::get();
    	$data = ['page_title' => 'FAQ Page || Covid Clinic', 'faqs' => $faqs];
    	return view('admin.page.faq.index', $data);
    }

    public function create()
    {
    	return view('admin.page.faq.create');
    }

    public function store(Request $request)
    {
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return response()->json([
            'success' => true,
            'message' => "Faq has been created!",
        ]);
    }

    public function edit(Request $request, $id)
    {
        $faq = Faq::where('id', $id)->first();
        $data = ['page_title' => 'Edit Faq || Covid Clinic', 'faq' => $faq];
        return view('admin.page.faq.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $faq = Faq::where('id', $id)->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return response()->json([
            'success' => true,
            'message' => "Faq has been updated!",
        ]);
    }

    public function destroy(Request $request)
    {       
        Faq::where('id', $request->id)->delete();
        return response()->json([
            'success' => true,
            'message' => "Faq has been deleted!",
        ]);
    }
}
