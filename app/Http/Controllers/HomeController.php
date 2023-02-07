<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    ** Homepage view 
    */
    public function index()
    {
        return view('frontend.home');
    }

    public function registerProfile(){
        return view('frontend.register');
    }
}
