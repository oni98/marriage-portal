@extends('frontend.layouts.app')
@section('title', 'Create Profile')
@section('content')
    <div class="container">
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
                            <select class="form-control select" name="looking_for" id="" required>
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
                            <input type="text" name="name" class="form-control" placeholder="আপনার পুরো নাম লিখুন" required>
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
                </div>

                <div class="form-row align-items-center">
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
                                <option selected disabled>যে কোনো একটি সিলেক্ট করুন</option>
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
                            <select class="form-control select" name="caste" id="caste">
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
                            <input type="date" class="form-control" date-format="dd/mm/yy" name="dob" required>
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
                            <select name="marital_status" id="" class="form-control " required>
                                <option selected disabled>সিলেক্ট করুন</option>
                                @foreach ($marital_statuses as $mar)
                                    <option value="{{ $mar->id }}">{{ $mar->name }}</option>
                                @endforeach
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
                            <select name="education" id="" class="form-control " required>
                                <option selected disabled>সিলেক্ট করুন</option>
                                @foreach ($education as $edu)
                                    <option value="{{ $edu->id }}">{{ $edu->name }}</option>
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
                            <select name="profession" id="" class="form-control " required>
                                <option selected disabled>সিলেক্ট করুন</option>
                                @foreach ($professions as $prof)
                                    <option value="{{ $prof->id }}">{{ $prof->name }}</option>
                                @endforeach
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
                            <select class="form-control select2" name="division" id="division" required>
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
                            <select class="form-control select2" name="district" id="district" required>
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
                            <select class="form-control select2" name="upazila" id="upazila" required>
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
                            <select class="form-control select2" name="union" id="union" required>
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
                            <input type="text" name="area" class="form-control"
                                placeholder="আপনার এলাকার নাম লিখুন" required>
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
                            <select name="present_residence_status" id="" class="form-control select" required>
                                <option selected disabled>সিলেক্ট করুন</option>
                                <option value="Citizen"> Citizen </option>
                                <option value="Permanent Resident"> Permanent Resident </option>
                                <option value="Student Visa "> Student Visa </option>
                                <option value="Temporary Visa"> Temporary Visa </option>
                                <option value="Work Permit"> Work Permit </option>
                                <option value="Rental Residence"> Rental Residence </option>
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
                            <input type="email" name="email" class="form-control"
                                placeholder="আপনার ইমেইল এড্রেস লিখুন" required>
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
                            <input type="text" name="whatsapp" class="form-control"
                                placeholder="আপনার হোয়াটসঅ্যাপ নাম্বার লিখুন">
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
                            <input type="text" name="phone" class="form-control"
                                placeholder="আপনার মোবাইল নাম্বার লিখুন" required>
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
                            <input type="text" name="guardian_phone" class="form-control"
                                placeholder="অভিভাবকের মোবাইল নাম্বার লিখুন" required>
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
                            <input type="password" name="password" class="form-control"
                                placeholder="আপনার পাসওয়ার্ড লিখুন" required>
                        </div>
                    </div>
                    <div class="col-md-6 my-1 pr-4">
                        <label class="font-weight-bold" for="inlineFormInputGroupUsername">Confirm Password <span
                                class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><img src="{{ asset('assets/frontend/img/register-form/Confirm-password.png') }}" alt="" width="30px"></div>
                            </div>
                            <input type="password" name="confirm_password" class="form-control"
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
        document.getElementById("religion").addEventListener("change", function() {
            var casteSelect = document.getElementById("caste");
            casteSelect.innerHTML = ""; // clear the options
            if (this.value === "2") { // if Hindu is selected as religion
                // add options for Hindu castes
                var options = ["", "Brahmin", "Kshatriya", "Vaishya", "Shudra"];
                options.forEach(function(option) {
                    var opt = document.createElement("option");
                    opt.value = option;
                    opt.innerHTML = option;
                    casteSelect.appendChild(opt);
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#division').change(function() {
                var divisionId = $(this).val();
                $.ajax({
                    url: '/get-districts/' + divisionId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(districts) {
                        $('#district').empty();
                        $('#district').append('<option selected disabled>Select</option>');
                        $.each(districts, function(index, district) {
                            $('#district').append('<option value="' + district.id +
                                '">' + district.name + '</option>');
                        });
                    }
                });
            });
            $('#district').change(function() {
                var districtId = $(this).val();
                $.ajax({
                    url: '/get-upazilas/' + districtId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(upazilas) {
                        $('#upazila').empty();
                        $('#upazila').append('<option selected disabled>Select</option>');
                        $.each(upazilas, function(index, upazila) {
                            $('#upazila').append('<option value="' + upazila.id + '">' +
                                upazila.name + '</option>');
                        });
                    }
                });
            });
            $('#upazila').change(function() {
                var upazilaId = $(this).val();
                $.ajax({
                    url: '/get-unions/' + upazilaId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(unions) {
                        $('#union').empty();
                        $('#union').append('<option selected disabled>Select</option>');
                        $.each(unions, function(index, union) {
                            $('#union').append('<option value="' + union.id + '">' +
                                union.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endpush
