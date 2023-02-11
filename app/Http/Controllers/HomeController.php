<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Union;
use Devfaysal\BangladeshGeocode\Models\Upazila;

class HomeController extends Controller
{
    /*
    ** Homepage view 
    */
    public function index()
    {
        return view('frontend.home');
    }

    public function registerProfile()
    {
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();
        $unions = Union::all();
        return view('frontend.register', ['divisions' => $divisions, 'districts' => $districts, 'upazilas' => $upazilas, 'unions' => $unions]);
    }
}
