<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Profession;
use App\Models\User;
use App\Services\SmsService;
use Devfaysal\BangladeshGeocode\Models\District;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::with(['religion', 'maritalStatus', 'education'])->get();
        $professions = Profession::all();
        $districts = District::all();
        return view('backend.application.index', ['applications' => $applications, 'professions' => $professions, 'districts' => $districts]);
    }

    public function store(Request $request)
    {
        try {
            /*validate request data*/
            $request->validate([
                'email' => 'required|email|unique:users',
                'phone' => 'required|numeric|unique:users',
                'password' => 'required|confirmed'
            ]);

            DB::beginTransaction();

            $register = new Application();
            $register->profile_created_by = $request->profile_created_by;
            $register->looking_for = $request->looking_for;
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
            $register->father_profession = $request->father_profession;
            $register->father_other_profession = $request->father_other_profession ?? '';
            $register->mother_profession = $request->mother_profession;
            $register->mother_other_profession = $request->mother_other_profession ?? '';
            $register->height = $request->height ?? '';
            $register->father_district = $request->father_district;
            $register->mother_district = $request->mother_district;
            $register->present_district = $request->present_district;
            $register->area = $request->area;
            $register->email = $request->email;
            $register->whatsapp = $request->whatsapp;
            $register->phone = $request->phone;
            $register->guardian_phone = $request->guardian_phone;
            $register->password = Hash::make($request->password);
            $register->save();

            $user = new User();
            $user->application_id = $register->id;
            $user->name = $register->name;
            $user->phone = $register->phone;
            $user->email = $register->email;
            $user->password = Hash::make($request->password);
            $user->save();

            DB::commit();
            $this->sendSms($register->phone);
            notify()->success('দ্রুত সার্ভিস পেতে পেইড সার্ভিস নেয়ার অনুরোধ করছি', 'ধন্যবাদ। আপনি সফলভাবে ফ্রি রেজিস্ট্রেশন করেছেন');
            return redirect('/create-new-profile');
        } catch (\Exception $e) {
            DB::rollBack();
            notify()->error('Something Went Wrong!! Please try again');
            return redirect('/create-new-profile');
        }
    }

    public function sendSms($customerPhone)
    {

        $mobileNumber = env('ADMIN_MOBILE');
        $sms = new SmsService();

        $sms->setTemplate("আলহামদুলিল্লাহ, বিয়ে মিডিয়ায় আপনি সফলভাবে রেজিস্ট্রেশন করেছেন");
        $sms->sendSms('88' . $customerPhone);

        if (!empty($mobileNumber)) {
            $sms->setTemplate("আলহামদুলিল্লাহ, বিয়ে মিডিয়ায় নুতন একটি রেজিস্ট্রেশন হয়েছে");
            $sms->sendSms($mobileNumber);
        }
    }

    public function destroy($id)
    {
        try {
            $application = Application::find($id);
            if ($application->delete()) {
                notify()->success('User also deleted', 'Application Deleted');
                return redirect('/admin/applications');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            notify()->error('Something Went Wrong!! Please try again');
            return redirect('/admin/applications');
        }
    }
}
