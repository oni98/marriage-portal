<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\MaritalStatus;
use App\Models\Profession;
use App\Models\Religion;
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
        $religions = Religion::all();
        $marital_statuses = MaritalStatus::all();
        $education = Education::all();
        $professions = Profession::all();
        $divisions = Division::all();
        $districts = District::orderBy('name')->get();
        $upazilas = Upazila::all();
        $unions = Union::all();
        return view('frontend.process', ['religions'=>$religions, 'marital_statuses'=>$marital_statuses, 'education'=>$education, 'professions'=>$professions, 'divisions'=>$divisions, 'districts'=>$districts, 'upazilas'=>$upazilas, 'unions'=>$unions]);
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
