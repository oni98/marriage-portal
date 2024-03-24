<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content=" Marriage Media, Marriage media bd, marriage media bangladesh,hindu patro,patri,বিয়ে,বিবাহ, শাদি-নিকাহ, পাত্র-পাত্রী, বর-কণে">

    <meta name="title" content="Marriage Media in Dhaka | The Right Choice For Matrimony BD">
    
    <meta name="description" content="Finding Marriage Media in Dhaka for a Wedding? We are the Trusted Matrimonial Service In BD.Call-01715911963 Islamic Patro Patri">
    
    <title>Marriage Media in Dhaka | The Right Choice For Matrimony BD {{-- - @yield('title') --}}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/fav-light.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/backend/library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/backend/fontawesome/css/all.min.css') }}">
    
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    @stack('css')
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.css" integrity="sha512-LEetX42b+K0TTmnfCNxYOrVTLlg36s06bJ8cutF3BpQT3VnpzdeqoYfn+FW2KBi/imYk2RpfQzlyzY7CrRW4CQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="google-site-verification" content="1h6EcKS09SXazj4yjK3Q3Ipm7CVMvX-OWpVQTO3im9I" />
    <!-- Google tag (gtag.js) -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HLJB7YPJ1G"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-HLJB7YPJ1G');
    </script>
</head>

<body>
    <h1 class="d-none">Marriage Media</h1>
    <div>
        <audio id="myAudio">
            <source src="{{ asset('assets/frontend/ASSALAMUALAIKUM.mp3') }}" type="audio/mpeg">
        </audio>
        <!-- Navbar -->
        @include('frontend.partials.header')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        <!-- Footer -->
        @include('frontend.partials.footer')

        <!-- Back to Top -->
        <div id="scroll" class="scroll-top" onclick="scrollToTop()" title="Back To Top"></div>
    </div>

    {{ \TawkTo::widgetCode() }}
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/backend/library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('assets/backend/library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ asset('assets/backend/library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Laravel Notify JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js" integrity="sha512-pi7w4/MYBJ/7/NFGQ1OCInentlT3CCVVKU2udjNRWhxIOY5K2vxSPKYEa6EKbEZvHkgyEB8SMlSU8E84Ig81Og==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom JS Scripts -->
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
    @stack('js')
    <script>
        @if (Session::has('success'))

            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>

</html>
