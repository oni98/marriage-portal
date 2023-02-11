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

    public function fetchDistricts($id){
        $districts = District::where('division_id', $id)->get();
        return response()->json($districts);
    }

    public function fetchUpazilas($id){
        $upazilas = Upazila::where('district_id', $id)->get();
        return response()->json($upazilas);
    }

    public function fetchUnions($id){
        $unions = Union::where('upazila_id', $id)->get();
        return response()->json($unions);
    }
}
