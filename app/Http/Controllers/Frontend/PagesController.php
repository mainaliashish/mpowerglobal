<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Team;
use App\Models\Client;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('is_featured', 'desc')->latest()->take(3)->get();
        $teams = Team::latest()->take(4)->get();
        $clients = Client::orderBy('is_featured', 'desc')->latest()->take(6)->get();
        return view('frontend.pages.index', compact('teams', 'services', 'clients'));
    }

    public function ajaxContactForm(Request $request)
    {
        $request->validate([
             'fname'           => 'required',
             'email'          => 'required|email',
             'phone'          => 'required|numeric',
             'message'        => 'required',
         ]);

        Message::create([
            'name'          => $request->fname,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'message'       => $request->message,
        ]);
        return response()->json(['success'=>'Message Submitted. We will reach you soon.']);
    }
}
