<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class InquiryController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $items = $request->all();
        // dd($items);
        return view('confirm',['items' => $items]);
    }

    public function create(ContactRequest $request)
    {
        if ($request->get('back')) {
        return redirect('/contact')->withInput();
        }

        $items = $request->all();
        Inquiry::create($items);
        return view('thanks');
    }

}
