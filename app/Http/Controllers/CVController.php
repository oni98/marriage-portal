<?php

namespace App\Http\Controllers;

use App\Models\CV;
use App\Models\Education;
use App\Models\MaritalStatus;
use App\Models\Profession;
use App\Models\Religion;
use App\Services\File;
use Illuminate\Http\Request;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Union;
use Devfaysal\BangladeshGeocode\Models\Upazila;
use Illuminate\Support\Facades\DB;
use PDF;

class CVController extends Controller
{
    public function cvForm()
    {
        $religions = Religion::all();
        $marital_statuses = MaritalStatus::all();
        $education = Education::all();
        $professions = Profession::all();
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();
        $unions = Union::all();
        return view('frontend.cv', ['religions' => $religions, 'marital_statuses' => $marital_statuses, 'education' => $education, 'professions' => $professions, 'divisions' => $divisions, 'districts' => $districts, 'upazilas' => $upazilas, 'unions' => $unions]);
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $register = new CV();
            $register->name = $request->name;
            $register->surname = $request->surname;
            $register->religion_id = $request->religion;
            $register->caste = $request->caste;
            $register->dob = $request->dob;
            $register->education_system = $request->education_system;
            $register->marital_status_id = $request->marital_status;
            $register->education_id = $request->education;
            $register->ssc_year = $request->ssc_year;
            $register->profession_id = $request->profession;
            $register->other_profession = $request->other_profession ?? '';
            $register->permanent_address = $request->permanent_address;
            $register->nationality = $request->nationality ?? '';

            $register->father_profession = $request->father_profession;
            $register->father_other_profession = $request->father_other_profession ?? '';
            $register->mother_profession = $request->mother_profession;
            $register->mother_other_profession = $request->mother_other_profession ?? '';
            $register->father_district = $request->father_district;
            $register->mother_district = $request->mother_district;
            $register->sibling_brother = $request->sibling_brother;
            $register->sibling_sister = $request->sibling_sister;

            $register->email = $request->email;
            $register->whatsapp = $request->whatsapp;
            $register->phone = $request->phone;
            $register->guardian_phone = $request->guardian_phone;
            $register->about = $request->about;
            if ($request->hasFile('image')) {
                // if (file_exists(public_path('storage/' . $register->image))) {
                //     unlink(public_path('storage/' . $register->image));
                // }
                $register->image = (new File)->upload('cv', $request->image);
            }
            $register->save();

            $religions = Religion::all();
            $professions = Profession::all();
            $educations = Education::all();
            $marital_statuses = MaritalStatus::all();
            $districts = District::all();

            $data = [
                'user' => $register,
                'religions' => $religions,
                'professions' => $professions,
                'educations' => $educations,
                'marital_statuses' => $marital_statuses,
                'districts' => $districts
            ]; 
                
            $pdf = PDF::loadView('frontend.pdf.cv', $data);
          
            DB::commit();
            return $pdf->download('CV.pdf');
            // notify()->success('দ্রুত সার্ভিস পেতে পেইড সার্ভিস নেয়ার অনুরোধ করছি', 'ধন্যবাদ। আপনি সফলভাবে ফ্রি রেজিস্ট্রেশন করেছেন');
            // return redirect()->route('cvForm');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            notify()->error('Something Went Wrong!! Please try again');
            return redirect()->route('cvForm');
        }
    }
}
