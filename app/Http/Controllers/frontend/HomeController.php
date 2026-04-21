<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request) {
        return view('frontend.home.index');
    }
    public function about(Request $request) {
        return view('frontend.about.about');
    }

    
    public function contact(Request $request) {
        return view('frontend.contact.contact');
    }



}
