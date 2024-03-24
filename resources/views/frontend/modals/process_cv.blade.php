{{-- @extends('frontend.layouts.app')
@section('title', 'Generate CV')
@section('content') --}}
<div class="container" id="processCV">
    @include('frontend.partials.message')
    <div class="register-form" id="register">
        <form method="POST" action="{{ route('register.profile') }}" enctype="multipart/form-data">
            @csrf
            <h4 class="text-primary font-weight-bold">Basic Information</h4>
            <input type="hidden" name="register" value="cv">
            <div class="form-row align-items-center">
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername"> Name <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Name.png') }}" alt=""
                                    width="30px"></div>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="আপনার পুরো নাম লিখুন"
                           >
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
                        <input type="text" name="surname" class="form-control" placeholder="পদবী">
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Community / Religion <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Religion.png') }}" alt=""
                                    width="30px"></div>
                        </div>
                        <select name="religion" id="religion" class="form-control select">
                            <option selected disabled value="">সিলেক্ট করুন (ধর্ম)</option>
                            @foreach ($religions as $rel)
                                <option value="{{ $rel->id }}">{{ $rel->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Caste / Social order</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Caste.png') }}" alt=""
                                    width="30px"></div>
                        </div>
                        <input type="text" name="caste" class="form-control" placeholder="জাত/বংশ">
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Year of Birth <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Date-of-Birth.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select id="dob" name="dob" class="form-control select2">
                            <option disabled selected>সিলেক্ট করুন (জন্মসাল)</option>
                            @foreach (array_reverse(range(date('Y') - 11, 1960)) as $x)
                                <option value="{{ $x }}">{{ $x }}</option>
                            @endforeach
                        </select>
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
                        <select name="marital_status" id="" class="form-control select2">
                            <option selected disabled value="">সিলেক্ট করুন (বৈবাহিক অবস্থা)</option>
                            @foreach ($marital_statuses as $mar)
                                <option value="{{ $mar->id }}">{{ $mar->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="education_system">Education System
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/District.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select class="form-control select2" name="education_system" id="education_system">
                            <option selected disabled value="">সিলেক্ট করুন (শিক্ষাব্যবস্থা)</option>
                            <option value="Madrasa">Madrasa</option>
                            <option value="General">General</option>
                            <option value="English Medium">English Medium</option>
                            <option value="Madrasa & General">Madrasa & General</option>
                            <option value="English Medium & General">English Medium & General</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="education">Highest Education <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Education.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select name="education" id="" class="form-control select2">
                            <option selected disabled value="">সিলেক্ট করুন (সর্বোচ্চ শিক্ষা)</option>
                            @foreach ($education as $edu)
                                <option value="{{ $edu->id }}">{{ $edu->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="ssc_year">SSC/O'Level/Dakhil/Equivalent Year
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Date-of-Birth.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select id="ssc_year" name="ssc_year" class="form-control select2">
                            <option disabled selected>সিলেক্ট করুন (মাধ্যমিক শিক্ষাবর্ষ)</option>
                            <option value="Below SSC">Below SSC</option>
                            @foreach (range(date('Y'), 1975) as $x)
                                <option value="{{ $x }}">{{ $x }}</option>
                            @endforeach
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
                        <select name="profession" id="profession" class="form-control select2">
                            <option selected disabled value="">সিলেক্ট করুন (পেশা)</option>
                            @foreach ($professions as $prof)
                                <option value="{{ $prof->id }}">{{ $prof->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="text" id="other_profession" name="other_profession" class="form-control"
                            placeholder="পেশা লিখুন">
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="height">Nationality
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Division.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <input type="text" id="nationality" name="nationality" class="form-control"
                            placeholder="জাতীয়তা">
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="height">Height
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Division.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select class="form-control" name="height" id="height">
                            <option selected disabled value="">সিলেক্ট করুন (উচ্চতা)</option>
                            @for ($height = 56.4; $height <= 76.8; $height++)
                                @php
                                    $feet = floor($height / 12);
                                    $inches = $height % 12;
                                @endphp
                                <option value="{{ $feet . '.' . $inches }}">{{ $feet . '.' . $inches }}"</option>
                            @endfor
                        </select>
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Present District
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Resident.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select class="form-control select2" name="present_district" id="present_district">
                            <option selected disabled value="">সিলেক্ট করুন (বর্তমানে যে জেলায় অবস্থান করছেন)</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Permanent District
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Resident.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select class="form-control select2" name="permanent_district" id="permanent_district">
                            <option selected disabled value="">সিলেক্ট করুন (আপনার স্থায়ী জেলা লিখুন)</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <h4 class="text-primary font-weight-bold mt-5">Family's Information</h4>
            <div class="form-row align-items-center">
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="father_profession">Father's Profession <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Profession.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select name="father_profession" id="father_profession" class="form-control select2"
                           >
                            <option selected disabled value="">সিলেক্ট করুন (পিতার পেশা)</option>
                            @foreach ($professions as $prof)
                                <option value="{{ $prof->id }}">{{ $prof->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="text" id="father_other_profession" name="father_other_profession"
                            class="form-control" placeholder="পিতার পেশা লিখুন">
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="mother_profession">Mother's Profession <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Profession.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select name="mother_profession" id="mother_profession" class="form-control select2"
                           >
                            <option selected disabled value="">সিলেক্ট করুন (মাতার পেশা)</option>
                            @foreach ($professions as $prof)
                                <option value="{{ $prof->id }}">{{ $prof->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="text" id="mother_other_profession" name="mother_other_profession"
                            class="form-control" placeholder="মাতার পেশা লিখুন">
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="father_district">Father's District
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/District.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select class="form-control select2" name="father_district" id="father_district">
                            <option selected disabled value="">সিলেক্ট করুন (পিতার জেলা)</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="mother_district">Mother's District
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/District.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <select class="form-control select2" name="mother_district" id="mother_district">
                            <option selected disabled value="">সিলেক্ট করুন (মাতার জেলা)</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Sibling Brother</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Name.png') }}" alt=""
                                    width="30px"></div>
                        </div>
                        <input type="number" name="sibling_brother" class="form-control"
                            placeholder="আপনার ভাই কতজন">
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Sibling Sister</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Name.png') }}" alt=""
                                    width="30px"></div>
                        </div>
                        <input type="number" name="sibling_sister" class="form-control"
                            placeholder="আপনার বোন কতজন">
                    </div>
                </div>
            </div>

            <h4 class="text-primary font-weight-bold mt-5">Contact Information</h4>
            <div class="form-row align-items-center">
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Email.png') }}" alt=""
                                    width="30px"></div>
                        </div>
                        <input type="email" name="email" class="form-control"
                            placeholder="আপনার ইমেইল এড্রেস লিখুন">
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">WhatsApp</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/WhatsApp.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <input type="number" name="whatsapp" class="form-control"
                            placeholder="আপনার হোয়াটসঅ্যাপ নাম্বার লিখুন">
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Phone Number
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Phone.png') }}" alt=""
                                    width="30px"></div>
                        </div>
                        <input type="tel" name="phone" class="form-control" placeholder="01xxxxxxxxx"
                            pattern="[0-9]{11}">
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Guardian Phone Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Guardian-phone.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <input type="number" name="guardian_phone" class="form-control"
                            placeholder="অভিভাবকের মোবাইল নাম্বার লিখুন">
                    </div>
                </div>

                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Password
                        <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Password.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <input type="password" name="password" class="form-control"
                            placeholder="আপনার পাসওয়ার্ড লিখুন">
                    </div>
                </div>
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Confirm Password <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img
                                    src="{{ asset('assets/frontend/img/register-form/Confirm-password.png') }}"
                                    alt="" width="30px"></div>
                        </div>
                        <input type="password" name="password_confirmation" class="form-control"
                            placeholder="আপনার পাসওয়ার্ডটি পুনরায় লিখুন">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <p>
                    <span class="text-primary2">**</span>
                    ভবিষ্যতে লগইন করার জন্য এই ফোন নম্বর ও পাসওয়ার্ডটি সংরক্ষণ করে রাখুন
                    <span class="text-primary2">**</span>
                </p>
            </div>

            <h4 class="text-primary font-weight-bold mt-5">Additional Information</h4>
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
                            <option selected disabled value="">সিলেক্ট করুন (একাউন্ট কর্তা)</option>
                            <option value="Friend">Friend </option>
                            <option value="Self">Self</option>
                            <option value="Guardian">Guardian</option>
                            <option value="Parent">Parent</option>
                            <option value="Relatives">Relatives</option>
                            <option value="Others">Others</option>
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
                        <select class="form-control select" name="looking_for" id="">
                            <option selected disabled value="">সিলেক্ট করুন</option>
                            <option value="Bride">Bride (পাত্রী)</option>
                            <option value="Groom">Groom (পাত্র)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row align-items-center">
                <div class="col-12 mt-1">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">About You</label>
                    <textarea name="about" id="" class="form-control" rows="4" placeholder="আপনার সম্পর্কে লিখুন"
                        ></textarea>
                </div>
            </div>

            <div class="form-row align-items-center">
                <div class="col-12 mt-1">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Describe Your Desired
                        Bride/Groom</label>
                    <textarea name="desired_bride_groom" id="" class="form-control" rows="4"
                        placeholder="আপনার পছন্দের পাত্র/পাত্রী সম্পর্কে লিখুন"></textarea>
                </div>
            </div>

            <div class="form-row align-items-center">
                <div class="col-md-4 mt-1">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Your Photo<small>[max
                            5]</small>
                        (আপনার ছবি<small>[সর্বোচ্চ ৫ টি]</small>) <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="images[]" multiple accept="image/*"
                           >
                    </div>
                </div>
            </div>

            <div class="form-row align-items-center">
                <div class="col-auto mt-4">
                    <button type="submit" class="btn btn-primary px-4">REGISTER & DOWNLOAD </button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- @endsection --}}

{{-- @push('js')
    <script>
        $('#other_profession').hide();
        $('#father_other_profession').hide();
        $('#mother_other_profession').hide();

        $('#profession').on('change', function() {
            $('#other_profession').toggle($(this).find(':selected').text() === 'Others');
        });
        $('#father_profession').on('change', function() {
            $('#father_other_profession').toggle($(this).find(':selected').text() === 'Others');
        });
        $('#mother_profession').on('change', function() {
            $('#mother_other_profession').toggle($(this).find(':selected').text() === 'Others');
        });
    </script>
@endpush --}}
