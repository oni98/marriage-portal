<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::with(['religion','maritalStatus','education','profession'])->get();
        return view('backend.application.index', ['applications' => $applications]);
    }

    public function store(Request $request){
        $register = new Application();
        $register->profile_created_by = $request->profile_created_by;
        $register->looking_for = $request->looking_for;
        $register->name = $request->name;
        $register->surname = $request->surname;
        $register->religion_id = $request->religion;
        $register->caste = $request->caste;
        $register->dob = $request->dob;
        $register->marital_status_id = $request->marital_status;
        $register->education_id = $request->education;
        $register->profession_id = $request->profession;
        $register->division_id = $request->division;
        $register->district_id = $request->district;
        $register->upazila_id = $request->upazila;
        $register->union_id = $request->union;
        $register->area = $request->area;
        $register->present_residence_status = $request->present_residence_status;
        $register->email = $request->email;
        $register->whatsapp = $request->whatsapp;
        $register->phone = $request->phone;
        $register->guardian_phone = $request->guardian_phone;
        $register->password = $request->password;

        if ($register->save()) {
            notify()->success('Registration Successful', 'Congratulations!!');
            return redirect('/create-new-profile');
        }
    }
}
