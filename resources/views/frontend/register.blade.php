@extends('frontend.layouts.app')
@section('title', 'Create Profile')
@section('content')
    <div class="container">
        <div class="register-form" id="register">
            <form>
                <h4 class="text-primary font-weight-bold">Basic Information</h4>
                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Profile Created By <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Profile-created-by.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select" name="profile_created_by" id="">
                                <option selected disabled>যে কোনো একটি সিলেক্ট করুন</option>
                                <option value="Friend">Friend </option>
                                <option value="Self">Self</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Parent">Parent</option>
                                <option value="Relatives">Relatives</option>
                                <option value="Others">Others</option>
                            </select>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Looking For <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Bride-Groom.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select" name="user_looking_for" id="">
                                <option selected disabled>যে কোনো একটি সিলেক্ট করুন</option>
                                <option value="Bride">Bride</option>
                                <option value="Groom">Groom</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Bride/Groom Name <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Name.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="text" name="candidate_name" class="form-control"
                                placeholder="আপনার পুরো নাম লিখুন">
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">SurName </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Name.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="text" name="candidate_surname" class="form-control" placeholder="বংশ">
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Community / Religion </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Religion.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <select name="user_religion" id="user_religion" class="form-control ">
                                <option selected disabled>যে কোনো একটি সিলেক্ট করুন</option>
                                <option value="1">Muslim</option>
                                <option value="2">Hindu</option>
                                <option value="3">Christian</option>
                                <option value="4">Buddhist</option>
                                <option value="5">Spiritual</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Caste / Social order <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Caste.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <select class="form-control select" name="" id="">
                                <option selected disabled>যে কোনো একটি সিলেক্ট করুন</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Date of Birth <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Date-of-Birth.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <input type="date" class="form-control" date-format="dd/mm/yy">
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Marital Status <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Marital-Status.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select name="user_marital_status" id="" class="form-control ">
                                <option selected disabled>সিলেক্ট করুন</option>
                                <option value="1">Never Married</option>
                                <option value="2">Widowed</option>
                                <option value="3">Awaiting Divorce</option>
                                <option value="4">Annulled</option>
                                <option value="5">Divorced</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Education <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Education.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select name="user_high_education" id="" class="form-control ">
                                <option selected disabled>সিলেক্ট করুন</option>
                                <option value="1">Associates Degree</option>
                                <option value="2">Bachelor</option>
                                <option value="14">B.C.S Cadre</option>
                                <option value="15">BBA</option>
                                <option value="24">BBS</option>
                                <option value="16">BA|BSS|BCOM|BSC</option>
                                <option value="17">BSC-Honours</option>
                                <option value="22">BDS|Dental Surgery</option>
                                <option value="25">B-Tech</option>
                                <option value="23">C.A </option>
                                <option value="3">Diploma</option>
                                <option value="21">DVM</option>
                                <option value="6">Honours Degree</option>
                                <option value="18">Higher Diploma</option>
                                <option value="5">High School</option>
                                <option value="7">H.S.C</option>
                                <option value="8">Masters</option>
                                <option value="19">M.A|M.SS|M.COM|MSC</option>
                                <option value="9">MBA</option>
                                <option value="10">MBBS</option>
                                <option value="20">FCPS Part - 2</option>
                                <option value="11">M.Phil</option>
                                <option value="4">PHD|Doctorate</option>
                                <option value="12">Trade school</option>
                                <option value="13">Undergraduate</option>
                                <option value="26">FCPS Part - 1</option>
                                <option value="27">A Level</option>
                                <option value="28">Dakhil</option>
                                <option value="29">Alim</option>
                                <option value="30">Fazil</option>
                                <option value="31">Kamil</option>
                                <option value="32">O level</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Profession <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Profession.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select name="user_profession" id="" class="form-control ">
                                <option value="" selected="" disabled="">Select Profession</option>
                                <option value="1">Not working</option>
                                <option value="3">Non-mainstream professional</option>
                                <option value="4">Accountant</option>
                                <option value="5">Acting Professional</option>
                                <option value="6">Actor</option>
                                <option value="7">Administration Professional</option>
                                <option value="8">Advertising Professional</option>
                                <option value="9">Air Hostess</option>
                                <option value="10">Airline</option>
                                <option value="11">Architect</option>
                                <option value="12">Artisan</option>
                                <option value="13">Audiologist</option>
                                <option value="14">Banker</option>
                                <option value="15">Beautician</option>
                                <option value="16">Biologist / Botanist</option>
                                <option value="17">Business Person</option>
                                <option value="18">Chartered Accountant</option>
                                <option value="19">Civil Engineer</option>
                                <option value="20">Clerical Official</option>
                                <option value="21">Commercial Pilot</option>
                                <option value="22">Company Secretary</option>
                                <option value="23">Computer Professional</option>
                                <option value="24">Consultant</option>
                                <option value="25">Contractor</option>
                                <option value="26">Cost Accountant</option>
                                <option value="27">Creative Person</option>
                                <option value="28">Customer Support Professional</option>
                                <option value="29">Defense Employee</option>
                                <option value="30">Dentist</option>
                                <option value="31">Designer</option>
                                <option value="32">Doctor</option>
                                <option value="33">Economist</option>
                                <option value="34">Engineer</option>
                                <option value="35">Engineer (Mechanical)</option>
                                <option value="36">Engineer (Project)</option>
                                <option value="37">Entertainment Professional</option>
                                <option value="38">Event Manager</option>
                                <option value="39">Executive</option>
                                <option value="40">Factory worker</option>
                                <option value="41">Farmer</option>
                                <option value="42">Fashion Designer</option>
                                <option value="43">Finance Professional</option>
                                <option value="44">Flight Attendant</option>
                                <option value="45">Government Employee</option>
                                <option value="46">Health Care Professional</option>
                                <option value="47">Home Maker</option>
                                <option value="48">Hotel And Restaurant Professional</option>
                                <option value="49">Human Resources Professional</option>
                                <option value="50">Interior Designer</option>
                                <option value="51">Investment Professional</option>
                                <option value="52">IT / Telecom Professional</option>
                                <option value="53">Journalist</option>
                                <option value="54">Lawyer</option>
                                <option value="55">Lecturer</option>
                                <option value="56">Legal Professional</option>
                                <option value="57">Manager</option>
                                <option value="58">Merchandiser</option>
                                <option value="59">Marketing Professional</option>
                                <option value="60">Media Professional</option>
                                <option value="61">Medical Professional</option>
                                <option value="62">Medical Transcriptionist</option>
                                <option value="63">Merchant Naval Officer</option>
                                <option value="64">Nurse</option>
                                <option value="65">Occupational Therapist</option>
                                <option value="66">Optician</option>
                                <option value="67">Pharmacist</option>
                                <option value="68">Private services</option>
                                <option value="69">Physician Assistant</option>
                                <option value="70">Physicist</option>
                                <option value="71">Physiotherapist</option>
                                <option value="72">Pilot</option>
                                <option value="73">Politician</option>
                                <option value="74">Production professional</option>
                                <option value="75">Professor</option>
                                <option value="76">Psychologist</option>
                                <option value="77">Public Relations Professional</option>
                                <option value="78">Real Estate Professional</option>
                                <option value="79">Research Scholar</option>
                                <option value="80">Retired Person</option>
                                <option value="81">Retail Professional</option>
                                <option value="82">Sales Professional</option>
                                <option value="83">Scientist</option>
                                <option value="84">Self-employed Person</option>
                                <option value="85">Social Worker</option>
                                <option value="86">Software Engineer</option>
                                <option value="87">Software Consultant</option>
                                <option value="88">Sportsman</option>
                                <option value="89">Student</option>
                                <option value="90">Teacher</option>
                                <option value="91">Technician</option>
                                <option value="92">Training Professional</option>
                                <option value="93">Transportation Professional</option>
                                <option value="94">Veterinary Doctor</option>
                                <option value="95">Volunteer</option>
                                <option value="96">Writer</option>
                                <option value="2">Working Abroad</option>
                                <option value="97">Zoologist</option>
                                <option value="98">Others</option>
                                <option value="99">Professional</option>
                                <option value="100">Not Employeed</option>
                                <option value="101">Employeed</option>
                                <option value="103">Retired</option>
                                <option value="104">Marine Professional</option>
                                <option value="105">Shipping Professional</option>
                                <option value="106">Marine Engineer</option>
                                <option value="107">NGO</option>
                                <option value="108">Retired Gov. Person</option>
                                <option value="109">Magistrate</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h4 class="text-primary font-weight-bold mt-5">Present Location</h4>
                <div class="form-row align-items-center">
                    {{-- <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Country Of Present Location
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Bangladesh.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select" name="" id="">
                                <option selected disabled>সিলেক্ট করুন</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Present Division <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Division.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select2" name="" id="division" v-on:keyup="division({{ $division->id }})">
                                <option selected disabled>সিলেক্ট করুন</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Present District
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/District.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select2" name="" id="district">
                                <option selected disabled>সিলেক্ট করুন</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Present Upazila / City <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Upazila-City.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select2" name="" id="upazila">
                                <option selected disabled>সিলেক্ট করুন</option>
                                @foreach ($upazilas as $upazila)
                                    <option value="{{ $upazila->id }}">{{ $upazila->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Village / Area <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Village.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <select class="form-control select2" name="" id="union">
                                <option selected disabled>সিলেক্ট করুন</option>
                                @foreach ($unions as $union)
                                    <option value="{{ $union->id }}">{{ $union->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Location / Landmark / Area
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Area.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="text" class="form-control" placeholder="আপনার এলাকার নাম লিখুন">
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Residency Status <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Resident.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select" name="" id="">
                                <option selected disabled>সিলেক্ট করুন</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>

                <h4 class="text-primary font-weight-bold mt-5">Account Information</h4>
                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Email Address
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Email.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="text" class="form-control" placeholder="আপনার ইমেইল এড্রেস লিখুন">
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">WhatsApp <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/WhatsApp.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <input type="text" class="form-control" placeholder="আপনার হোয়াটসঅ্যাপ নাম্বার লিখুন">
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Bride/Groom Phone Number
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Phone.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="text" class="form-control" placeholder="আপনার মোবাইল নাম্বার লিখুন">
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Guardian Phone Number <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Guardian-phone.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <input type="text" class="form-control" placeholder="অভিভাবকের মোবাইল নাম্বার লিখুন">
                        </div>
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Password
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Password.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <input type="text" class="form-control" placeholder="আপনার পাসওয়ার্ড লিখুন">
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Confirm Password <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Confirm-Password.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <input type="text" class="form-control" placeholder="আপনার পাসওয়ার্ডটি পুনরায় লিখুন">
                        </div>
                    </div>
                </div>

                <div class="form-check mt-4">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I affirm that I have read and agreed to the
                        Privacy Policy and Terms & Conditions of biyemedia.com for your convenience, these
                        documents.</label>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-auto mt-4">
                        <button type="submit" class="btn btn-primary px-4">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        let app = new Vue({
            el: '#register',
            data: {
            },
            methods: {
                division: function(id){
                    console.log(id);
                }
            },
            created: function() {
                
            }
        });
    </script>
@endpush
