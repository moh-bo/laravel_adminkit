<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }} | {{ env('APP_NAME') }}</title>
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">
    
  <!-- Choices JS -->
  <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

  <!-- Main Theme Js -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
  <!-- Bootstrap Css -->
  <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

  <!-- Style Css -->
  <link href="{{ asset('assets/css/styles.min.css') }}" rel="stylesheet" >

  <!-- Icons Css -->
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" >

  <!-- Node Waves Css -->
  <link href="{{ asset('assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" > 

  <!-- Simplebar Css -->
  <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >
  
  <!-- Color Picker Css -->
  <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

  <!-- Choices Css -->
  <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">



    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
  

       
                {{ $slot }}
           
        <!-- Popper JS -->
        <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
        <!-- Defaultmenu JS -->
        <script src="{{ asset('assets/js/defaultmenu.min.js') }}"></script>
    
        <!-- Node Waves JS-->
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    
        <!-- Sticky JS -->
        <script src="{{ asset('assets/js/sticky.js') }}"></script>
    
        <!-- Simplebar JS -->
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/simplebar.js') }}"></script>
    
        <!-- Color Picker JS -->
        <script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>
    
    
        
        <!-- Custom-Switcher JS -->
        <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
    
        <!-- Custom JS -->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

   

    {{-- <script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('theme/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

        <!-- Custom-Switcher JS -->
        <script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>

        <!-- Swiper JS -->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
    
        <!-- Internal Swiper JS -->
        <script src="{{ asset('assets/js/swiper.js')}}"></script>
    
        <!-- Custom JS -->
        <script src="{{ asset('assets/js/custom.js')}}"></script> --}}

        
</body>

</html>
