<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //

    function index(Request $request) {
        return view('client.home');
    }

    function about(Request $request) {
        return view('client.about');
    }

    function projects(Request $request) {
        return view('client.projects');
    }

    function contact(Request $request) {
        return view('client.contact');
    }

    function contactSubmit(Request $request) {

        Mail::to('inquiry@gholzad.com')->send(new ContactUsMail($request->all()));


        return redirect()->route('client.contact')->with('success', true);
    }
}
