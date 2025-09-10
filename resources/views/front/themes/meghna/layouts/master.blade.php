<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@getSetting('site_title')</title>
        <link rel="icon" type="image/x-icon" href="{{ getSetting('fav_icon') == null ? asset('packages/larapress/src/Assets/admin/img/fav.png') : asset('public/uploads/').'/'.getSetting('fav_icon') }}" />
        <!-- Meghna theme assets  -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ asset('public/front/meghna/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/front/meghna/vendor/bootstrap-icons/bootstrap-icons.css')}}"
        rel="stylesheet">
        <link href="{{ asset('public/front/meghna/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset('public/front/meghna/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/front/meghna/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link href="{{ asset('public/front/meghna/css/main.css')}}" rel="stylesheet" crossorigin="anonymous"> 
        <link href="{{ asset('public/front/meghna/css/aos.css')}}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    </head>
    <body class="index-page @auth() login @endauth">
        @getHeader()                
        @yield('content')               
        @getFooter()
        <!-- Vendor JS Files -->
        <script src="{{ asset('public/front/meghna/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('public/front/meghna/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{ asset('public/front/meghna/vendor/aos/aos.js')}}"></script>
        <script src="{{ asset('public/front/meghna/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{ asset('public/front/meghna/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('public/front/meghna/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{ asset('public/front/meghna/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('public/front/meghna/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

        <!-- Main JS File --> 
        <script src="{{ asset('public/front/meghna/js/main.js')}}" crossorigin="anonymous"></script>
        <script src="{{ asset('public/front/meghna/js/script.js')}}" crossorigin="anonymous"></script>
        <script src="{{ asset('public/front/meghna/js/aos.js')}}" crossorigin="anonymous"></script> 
        <script>
          AOS.init();
        </script>
    </body>
</html>