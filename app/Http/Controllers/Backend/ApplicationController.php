<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\ApplicationFile;
use App\Models\Education;
use App\Models\MaritalStatus;
use App\Models\Package;
use App\Models\Profession;
use App\Models\Religion;
use App\Models\User;
use App\Services\File;
use App\Services\SmsService;
use Devfaysal\BangladeshGeocode\Models\District;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PDF;

class ApplicationController extends Controller
{
    private $root = 'backend.application.';

    public function index()
    {
        $applications = Application::with(['religion', 'maritalStatus', 'education', 'userPackage', 'userPackage.package', 'files'])->get();
        $professions = Profession::all();
        $districts = District::all();
        $packages = Package::all();

        return view($this->root . 'index', ['applications' => $applications, 'professions' => $professions, 'districts' => $districts, 'packages' => $packages]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            if ($request->register == 'upload') {
                /*validate request data*/
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'biodata' => 'required',
                    'images' => 'required',
                    'profile_created_by' => 'required',
                    'looking_for' => 'required',
                    'phone' => 'required|numeric|unique:users',
                    'password' => 'required|confirmed'
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->with('error', 'লাল চিহ্নিত ফিল্ডগুলো অবশ্যই ফিলআপ করতে হবে');
                }

                $register = new Application();
                $register->profile_created_by = $request->profile_created_by;
                $register->looking_for = $request->looking_for;
                $register->name = $request->name;
                $register->phone = $request->phone;
                $register->guardian_phone = $request->guardian_phone;
                $register->password = Hash::make($request->password);
                if ($request->hasFile('biodata')) {
                    $register->biodata = (new File)->upload('applications/biodata', $request->biodata);
                }
            } else {
                /*validate request data*/
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'religion' => 'required',
                    'dob' => 'required',
                    'marital_status' => 'required',
                    'education_system' => 'required',
                    'education' => 'required',
                    'ssc_year' => 'required',
                    'profession' => 'required',
                    'height' => 'required',
                    'height' => 'required',
                    'present_district' => 'required',
                    'father_profession' => 'required',
                    'mother_profession' => 'required',
                    'father_district' => 'required',
                    'mother_district' => 'required',
                    'sibling_brother' => 'required',
                    'sibling_sister' => 'required',
                    'profile_created_by' => 'required',
                    'looking_for' => 'required',
                    'phone' => 'required|numeric|unique:users',
                    'password' => 'required|confirmed',
                    'images' => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->with('error', 'লাল চিহ্নিত ফিল্ডগুলো অবশ্যই ফিলআপ করতে হবে');
                }

                $register = new Application();
                $register->name = $request->name;
                $register->surname = $request->surname;
                $register->religion_id = $request->religion;
                $register->caste = $request->caste;
                $register->dob = $request->dob;
                $register->marital_status_id = $request->marital_status;
                $register->education_system = $request->education_system;
                $register->education_id = $request->education;
                $register->ssc_year = $request->ssc_year;
                $register->profession_id = $request->profession;
                $register->other_profession = $request->other_profession ?? '';
                $register->nationality = $request->nationality ?? '';
                $register->height = $request->height;
                $register->present_district = $request->present_district;
                $register->permanent_district = $request->permanent_district;

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
                $register->password = Hash::make($request->password);

                $register->profile_created_by = $request->profile_created_by;
                $register->looking_for = $request->looking_for;
                $register->about = $request->about;
                $register->desired_bride_groom = $request->desired_bride_groom;
            }

            if ($register->save()) {

                if ($request->hasFile('images')) {
                    foreach ($request->images as $key => $image) {
                        if ($key <= 4) {
                            $app_image = new ApplicationFile();
                            $app_image->application_id = $register->id;
                            $app_image->image = (new File)->upload('applications/' . $register->id, $image);
                            $app_image->save();
                        }
                    }
                }

                $user = new User();
                $user->application_id = $register->id;
                $user->name = $register->name;
                $user->phone = $register->phone;
                $user->email = $register->email;
                $user->password = Hash::make($request->password);
                if ($user->save()) {
                    $user->assignRole('user');

                    if ($request->register != 'upload') {
                        $image = ApplicationFile::find($register->id)->first();
                        $religions = Religion::all();
                        $professions = Profession::all();
                        $educations = Education::all();
                        $marital_statuses = MaritalStatus::all();
                        $districts = District::all();

                        $data = [
                            'user' => $register,
                            'image' => $image->image ?? '',
                            'religions' => $religions,
                            'professions' => $professions,
                            'educations' => $educations,
                            'marital_statuses' => $marital_statuses,
                            'districts' => $districts
                        ];

                        $pdf = PDF::loadView('frontend.pdf.cv', $data);
                        $pdf->download('CV.pdf');
                    }

                    DB::commit();
                    $this->sendSms($register->phone);
                    return redirect()->back()->with('success', 'ধন্যবাদ। আপনি সফলভাবে ফ্রি রেজিস্ট্রেশন করেছেন');
                }
            }

            return redirect()->back()->with('error', 'Something Went Wrong!! Please try again');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
            return redirect()->back()->with('error', 'Something Went Wrong!! Please try again');
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
                return redirect()->back()->with('success', 'Application Deleted');
            }
            return redirect()->back()->with('error', 'Something Went Wrong!! Please try again');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something Went Wrong!! Please try again');
        }
    }
}
