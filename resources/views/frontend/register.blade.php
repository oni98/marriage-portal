@extends('frontend.layouts.app')
@section('title', 'Create Profile')
@section('content')
    <div class="container">
        @include('frontend.partials.message')
        <div class="register-form" id="register">
            <form method="POST" action="{{ route('register.profile') }}" enctype="multipart/form-data">
                @csrf
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
                            <select class="form-control select" name="profile_created_by" id="" required>
                                <option selected disabled value="">যে কোনো একটি সিলেক্ট করুন</option>
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
                            <select class="form-control select" name="looking_for" id="" required>
                                <option selected disabled value="">যে কোনো একটি সিলেক্ট করুন</option>
                                <option value="Bride">Bride (পাত্রী)</option>
                                <option value="Groom">Groom (পাত্র)</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Bride/Groom Name <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Name.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="আপনার পুরো নাম লিখুন"
                                required>
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
                            <input type="text" name="surname" class="form-control" placeholder="বংশ">
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
                            <select name="religion" id="religion" class="form-control select" required>
                                <option selected disabled value="">যে কোনো একটি সিলেক্ট করুন</option>
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
                            <input type="text" name="caste" class="form-control" placeholder="বংশ">
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
                            <select id="dob" name="dob" class="form-control select2" required>
                                <option disabled selected>সিলেক্ট করুন</option>
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
                            <select name="marital_status" id="" class="form-control select2" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
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
                            <select class="form-control" name="education_system" id="education_system" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                <option value="Madrasa">Madrasa</option>
                                <option value="Genaral">Genaral</option>
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
                            <select name="education" id="" class="form-control select2" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                @foreach ($education as $edu)
                                    <option value="{{ $edu->id }}">{{ $edu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="ssc_year">SSC/Dakhil/Equivalent Year
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Date-of-Birth.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select id="ssc_year" name="ssc_year" class="form-control select2" required>
                                <option disabled selected>সিলেক্ট করুন</option>
                                <option value="Below SSC">Below SSC</option>
                                @foreach (range(date('Y'), 1975) as $x)
                                    <option value="{{ $x }}">{{ $x }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Bride/Groom's Profession <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Profession.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select name="profession" id="profession" class="form-control select2" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                @foreach ($professions as $prof)
                                    <option value="{{ $prof->id }}">{{ $prof->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" id="other_profession" name="other_profession" class="form-control"
                                placeholder="পাত্র/পাত্রীর পেশা লিখুন">
                        </div>
                    </div>
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
                                required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                @foreach ($professions as $prof)
                                    <option value="{{ $prof->id }}">{{ $prof->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" id="father_other_profession" name="father_other_profession" class="form-control"
                                placeholder="পাত্র/পাত্রীর পিতার পেশা লিখুন">
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
                                required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                @foreach ($professions as $prof)
                                    <option value="{{ $prof->id }}">{{ $prof->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="text" id="mother_other_profession" name="mother_other_profession" class="form-control"
                                placeholder="পাত্র/পাত্রীর মাতার পেশা লিখুন">
                        </div>
                    </div>

                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="height">Height
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/District.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control" name="height" id="height" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                @for ($i = 48; $i <= 62; $i++)
                                    <p>{{ $i / 10 }}"</p>
                                    <option value="{{ number_format($i / 10, 1) }}">{{ number_format($i / 10, 1) }}"
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <h4 class="text-primary font-weight-bold mt-5">Location</h4>
                <div class="form-row align-items-center">
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="father_district">Father's District
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/District.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select2" name="father_district" id="father_district" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
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
                            <select class="form-control select2" name="mother_district" id="mother_district" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="present_district">Present District
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/District.png') }}"
                                        alt="" width="30px"></div>
                            </div>
                            <select class="form-control select2" name="present_district" id="present_district" required>
                                <option selected disabled value="">সিলেক্ট করুন</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Location / Landmark / Area
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Area.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="text" name="area" class="form-control"
                                placeholder="আপনার এলাকার নাম লিখুন" required>
                        </div>
                    </div>
                </div>

                <h4 class="text-primary font-weight-bold mt-5">Account Information</h4>
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
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Bride/Groom Phone Number
                            <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img
                                        src="{{ asset('assets/frontend/img/register-form/Phone.png') }}" alt=""
                                        width="30px"></div>
                            </div>
                            <input type="number" name="phone" class="form-control"
                                placeholder="01xxxxxxxxx" required>
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
                                placeholder="অভিভাবকের মোবাইল নাম্বার লিখুন" required>
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
                                placeholder="আপনার পাসওয়ার্ড লিখুন" required>
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
                                placeholder="আপনার পাসওয়ার্ডটি পুনরায় লিখুন" required>
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
@endpush
