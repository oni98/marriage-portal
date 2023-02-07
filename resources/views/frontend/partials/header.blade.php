<nav class="navbar navbar-expand-lg navbar-light shadow-sm navbar-color fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center navbar-content-width" href="{{ url('/') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="" width="250px">
        </a>
        <button class="navbar-toggler navbar-toggler-right border-0 d-none" type="button" data-toggle="collapse"
            data-target="#navbar4">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-content-width" id="navbar4">
            <div class="menu-container">
                <nav class="menu-wrapper w-100">
                    <ul class="d-flex m-0">
                        <li class="menuItem1">
                            <a href="{{ url('/') }}"></a>
                        </li>

                        <li class="menuItem2">
                            <a href="{{ route('registerProfile') }}"></a>
                        </li>

                        <li class="menuItem3">
                            <a href="#"></a>
                        </li>

                        <li class="menuItem4">
                            <a href="#"></a>
                        </li>

                        <li class="menuItem5">
                            <a href="#"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- <div class="d-block d-lg-none">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="fas fa-question-circle fa-lg "></i>
            </a>
            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                <div class="dropdown-item">
                    For Service Assistance <br>
                    <i class="fas fa-phone"></i> +880 ++++++++
                </div>
                <div>
                    <hr class="dropdown-divider">
                </div>
                <div class="dropdown-item">
                    For Payment Assistance <br>
                    <i class="fas fa-phone"></i> +880 ++++++++
                </div>
            </div>
        </div> --}}
    </div>
</nav>
