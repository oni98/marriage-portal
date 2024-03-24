{{-- @extends('frontend.layouts.app')
@section('title', 'Create Profile')
@section('content') --}}
<div class="container" id="processRegister">
    @include('frontend.partials.message')
    <div class="register-form" id="register">
        <form method="POST" action="{{ route('register.profile') }}" enctype="multipart/form-data">
            @csrf
            <h4 class="text-primary font-weight-bold">Upload</h4>
            <input type="hidden" name="register" value="upload">
            <div class="form-row align-items-center pr-4">
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Bio Data (বায়োডাটা) <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="biodata">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Your Photo<small>[max 5]</small>
                        (আপনার ছবি<small>[সর্বোচ্চ ৫ টি]</small>) <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="images[]" multiple accept="image/*">
                    </div>
                </div>
            </div>

            <h4 class="text-primary font-weight-bold mt-5">Account Information</h4>
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
                <div class="col-md-6 my-1 pr-4">
                    <label class="font-weight-bold" for="inlineFormInputGroupUsername">Bride/Groom Phone Number
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
                                    src="{{ asset('assets/frontend/img/register-form/Password.png') }}" alt=""
                                    width="30px"></div>
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
            {{-- <div class="form-check mt-4">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I affirm that I have read and agreed to the
                    Privacy Policy and Terms & Conditions of biyemedia.com for your convenience, these
                    documents.</label>
            </div> --}}

            <div class="form-row align-items-center">
                <div class="col-auto mt-4">
                    <button type="submit" class="btn btn-primary px-4">REGISTER</button>
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
