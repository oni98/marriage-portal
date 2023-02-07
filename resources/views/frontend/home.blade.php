@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
    <!-- Splash Screen -->
    <div class="splash">
        <div class="splash-content">
            <img id="splash-gif" src="{{ asset('assets/frontend/img/home/splash.gif') }}" alt="Logo">
        </div>
    </div>
    <!-- Hero Slider -->
    <div class="hero-slider ">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner hero-slider">
                <div class="carousel-item active slider-container">
                    <img class="d-block" src="{{ asset('assets/frontend/img/home/slider/marriage.webp') }}"
                        alt="Bidhoba Bibah">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{ asset('assets/frontend/img/home/slider/marriage1.webp') }}"
                        alt="Second slide">
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->
    <div class="container mb-5">
        <div class="achievement mt-5 pt-4">
            <h2 class="text-center mb-5 text-primary font-weight-bolder text-uppercase">Why Choose Biye Media</h2>
            <div class="row mb-5">
                <div class="col-md-3 col-6 mb-5">
                    <div class="card d-block text-center card-item shadow rounded h-100">
                        <img class="mt-5" src="{{ asset('assets/frontend/img/home/Trusted-Marriage-Media.png') }}"
                            alt="Trusted Marriage Media" width="60%">
                        <div class="card-body">
                            <h6>Trusted By Millions Of Members</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 mb-5">
                    <div class="card d-block text-center card-item rounded h-100">
                        <img class="mt-5" src="{{ asset('assets/frontend/img/home/Marriage-Media-Enhanced-Icon.png') }}"
                            alt="Biye Media Privacy Setting" width="60%">
                        <div class="card-body">
                            <h6>Enhanced Privacy Settings For You</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-5">
                    <div class="card d-block text-center card-item shadow rounded h-100">
                        <img class="mt-5" src="{{ asset('assets/frontend/img/home/Intelligent-Matchmaking-System.png') }}"
                            alt="Marriage Media Match Making System" width="60%">
                        <div class="card-body">
                            <h6>Intelligent Matchmaking System</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-5">
                    <div class="card d-block text-center card-item shadow rounded h-100">
                        <div id="myclock" class="pt-5"></div>
                        <div class="card-body px-4">
                            <h6>Avoid Delay In Your Marriage</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bride/Groom List -->
    <div class="my-5 people">
        {{-- <div class="container">
            <div class="row text-primary justify-content-between">
                <div class="col-md-2 text-center">
                    <img class="mb-3 rounded-circle blur" src="{{ asset('assets/frontend/img/user.webp') }}" alt=""
                        width="80%" height="60%">
                    <p> <span class="font-weight-bold">Mohammad Zahin </span> <br> 27 Yrs</p>
                </div>
                <div class="col-md-2 text-center">
                    <img class="mb-3 rounded-circle blur" src="{{ asset('assets/frontend/img/user-female.jpg') }}"
                        alt="" width="80%" height="60%">
                    <p> <span class="font-weight-bold">Mohua Mou </span> <br> 22 Yrs</p>
                </div>
                <div class="col-md-2 text-center">
                    <img class="mb-3 rounded-circle blur" src="{{ asset('assets/frontend/img/user.webp') }}" alt=""
                        width="80%" height="60%">
                    <p> <span class="font-weight-bold">Riad Ahmed</span> <br> 32 Yrs</p>
                </div>
                <div class="col-md-2 text-center">
                    <img class="mb-3 rounded-circle blur" src="{{ asset('assets/frontend/img/user-female.jpg') }}"
                        alt="" width="80%" height="60%">
                    <p> <span class="font-weight-bold">Tajrin Tuba </span> <br> 26 Yrs</p>
                </div>
                <div class="col-md-2 text-center">
                    <img class="mb-3 rounded-circle blur" src="{{ asset('assets/frontend/img/user.webp') }}" alt=""
                        width="80%" height="60%">
                    <p> <span class="font-weight-bold">Sajid Khan </span> <br> 28 Yrs</p>
                </div>
            </div>
        </div> --}}
    </div>

    <!-- Slider -->
    <div class="container mb-5">
        <div class="row justify-content-between">
            <div class="col-md-6 mb-5 pb-5">
                <h4 class="text-primary font-weight-bolder text-uppercase">The perfect marriage media site for a perfect
                    match
                </h4>
                <p class="text-justify py-4">Biye Media or <a href="https://www.facebook.com/biyemedia" target="_blank">
                        Marriage Media BD </a>have helped lakhs of people find their perfect partner and
                    perfect families. Because at m4marry, we believe that a marriage is not about just two persons but
                    about two families too. Biye Media helps you find your right partner and family who match your
                    community, interests and preferences through its personalized search assistance.</p>
                <h5 class="text-dark">Millions of families have found each other on Biye Media. Find yours.</h5>

                <div class="btn-register">
                    <a href="{{ route('registerProfile') }}"></a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active slider-container">
                            <img class="d-block"
                                src="{{ asset('assets/frontend/img/home/slider/Divorce Patro Patri.webp') }}"
                                alt="Bidhoba Bibah" width="100%" height="500px">
                            {{-- <div class="slider-overlay">
                                <div class="slider-text">Widow Marriage</div>
                            </div> --}}
                        </div>
                        <div class="carousel-item">
                            <img class="d-block" src="{{ asset('assets/frontend/img/home/slider/Hindu Patro Patri.webp') }}"
                                alt="Hindu Bibah" width="100%" height="500px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block"
                                src="{{ asset('assets/frontend/img/home/slider/Syhleti Patro Patri.webp') }}"
                                alt="Sylheti Bride" width="100%" height="500px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Verification System -->
    <div style="background: url({{ asset('assets/frontend/img/bg-pattern.jpg') }})">
        <div class="container my-5 py-5">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <img src="{{ asset('assets/frontend/img/home/badge.png') }}" alt="" width="100%">
                </div>
                <div class="col-md-6">
                    <h4 class="text-primary font-weight-bolder text-uppercase">9-Points Verification System</h4>
                    <p class="text-justify py-4">Biye Media or <a href="https://www.facebook.com/biyemedia" target="_blank">
                            Marriage Media BD </a>uses unique 9-Points Trust and Safety features, for the
                        security of our members, called “Verification Badges” that display on member profiles after they
                        pass the verification of Mobile, Email, Location, Photo, Age, Education, Salary, Meeting, ID and
                        Nationality. Fully verified members also get “The Famous Green Tick” on their profiles.</p>
                    <div class="btn-register">
                        <a href="{{ route('registerProfile') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <div class="mt-5 py-5">
        <div class="container">
            <h2 class="text-center text-primary font-weight-bolder mb-5 text-uppercase">Most Recent</h2>
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="card rounded mb-5">
                        <div class="card-head text-center py-3">
                            <h6 class="text-primary">Proposal Id: 12345 | 3 Days Ago</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/frontend/img/user-default.png') }}" alt=""
                                        width="100%">
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Age :</h6>
                                            <h6>Gender :</h6>
                                            <h6>Occupation :</h6>
                                            <h6>Qualification :</h6>
                                            <h6>Maritual Status :</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Height :</h6>
                                            <h6>Location :</h6>
                                            <h6>Caste :</h6>
                                            <h6>Status :</h6>
                                            <h6><a class="btn btn-sm btn-primary">View Details >> </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card rounded mb-5">
                        <div class="card-head text-center py-3">
                            <h6 class="text-primary">Proposal Id: 12345 | 3 Days Ago</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/frontend/img/user-default.png') }}" alt=""
                                        width="100%">
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Age :</h6>
                                            <h6>Gender :</h6>
                                            <h6>Occupation :</h6>
                                            <h6>Qualification :</h6>
                                            <h6>Maritual Status :</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Height :</h6>
                                            <h6>Location :</h6>
                                            <h6>Caste :</h6>
                                            <h6>Status :</h6>
                                            <h6><a class="btn btn-sm btn-primary">View Details >> </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 hide-in-mobile">
                    <div class="card rounded mb-5">
                        <div class="card-head text-center py-3">
                            <h6 class="text-primary">Proposal Id: 12345 | 3 Days Ago</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/frontend/img/user-default.png') }}" alt=""
                                        width="100%">
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Age :</h6>
                                            <h6>Gender :</h6>
                                            <h6>Occupation :</h6>
                                            <h6>Qualification :</h6>
                                            <h6>Maritual Status :</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Height :</h6>
                                            <h6>Location :</h6>
                                            <h6>Caste :</h6>
                                            <h6>Status :</h6>
                                            <h6><a class="btn btn-sm btn-primary">View Details >> </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 hide-in-mobile">
                    <div class="card rounded mb-5">
                        <div class="card-head text-center py-3">
                            <h6 class="text-primary">Proposal Id: 12345 | 3 Days Ago</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/frontend/img/user-default.png') }}" alt=""
                                        width="100%">
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Age :</h6>
                                            <h6>Gender :</h6>
                                            <h6>Occupation :</h6>
                                            <h6>Qualification :</h6>
                                            <h6>Maritual Status :</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Height :</h6>
                                            <h6>Location :</h6>
                                            <h6>Caste :</h6>
                                            <h6>Status :</h6>
                                            <h6><a class="btn btn-sm btn-primary">View Details >> </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="position-relative">
        <div class="contact-section"></div>
        <div class="container centered text-dark px-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="contact-heading">Contact Us</h2>
                    <img src="{{ asset('assets/frontend/img/home/Marriage-media-Contact.png') }}"
                        alt="Marriage media Contact" width="60%">
                </div>
                <div class="col-md-6 pl-4">
                    <form>
                        <div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <h5 class="font-weight-bold">Looking For : </h5>
                                </div>
                                <div class="form-group d-flex col-md-6 justify-content-center">
                                    <div class="form-group mr-5">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label font-weight-bold" for="gridRadios1">
                                            Bride
                                        </label>
                                    </div>
                                    <div class="form-group ">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                            id="gridRadios2" value="option2">
                                        <label class="form-check-label font-weight-bold" for="gridRadios2">
                                            Groom
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 pr-4">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="NAME">
                                </div>
                                <div class="form-group col-md-6 pr-4">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="EMAIL">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 pr-4">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="PASSWORD">
                                </div>
                                <div class="form-group col-md-6 pr-4">
                                    <input type="password" class="form-control" id="inputPassword4"
                                        placeholder="LOCATION">
                                </div>
                            </div>
                            <div class="form-group pr-3">
                                <input type="file" class="form-control" id="inputAddress"
                                    placeholder="ATTACH YOUR PROFILE">
                            </div>
                        </div>
                        <div class="btn-send">
                            <a href="#"></a>
                        </div>
                        {{-- <a href=""class="hover-switch send">
                            <img src="{{ asset('assets/frontend/img/home/button-send-green.png') }}" />
                            <img src="{{ asset('assets/frontend/img/home/button-send-pink.png') }}" />
                        </a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/frontend/js/clock.js') }}"></script>
@endpush
