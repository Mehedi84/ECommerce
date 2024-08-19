<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    
    <link rel="icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" type="image/x-icon">
    <title>E-commerce Dashboard | Mofi - Premium Admin Template By Pixelstrap</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/rating.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/vector-map.css') }}">
    <!-- Plugins css Ends-->

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    


    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
        <!-- start toastr CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <!-- end toastr CSS -->
    <link id="color" rel="stylesheet" href="{{ asset('backend/assets/css/color-1.css') }}" media="screen">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">

    <!-- Custom css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/custom.css') }}">
  </head>

  <body> 
    {{-- <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div> --}}
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="{{_icons('arrow_up')}}"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
    
      <!--start include Header -->
      @include('backend.includes.header')
      <!--end include Header -->

      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        
        <!--start include Sidebar -->
        @include('backend.includes.sidebar')
        <!--end include Sidebar -->

        <div class="page-body">
          <!--start content -->
          @yield('content')
          <!--end content -->
        </div>
        
        <!--start include footer -->
        @include('backend.includes.footer')
        <!--end include footer -->
        
      </div>
    </div>

    <!-- Bootstrap js-->
    <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    
    <!-- latest jquery-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <!-- feather icon js-->
    {{-- <script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script> --}}
    <!-- scrollbar js-->
    <script src="{{ asset('backend/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/sidebar-pin.js') }}"></script> --}}
    <script src="{{ asset('backend/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/slick/slick.js') }}"></script>
    <script src="{{ asset('backend/assets/js/header-slick.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/morris-chart/raphael.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/morris-chart/morris.js') }}"> </script>
    <script src="{{ asset('backend/assets/js/chart/morris-chart/prettify.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/echart/data/symbols.js') }}"></script>
    <script src="{{ asset('backend/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/slick/slick-theme.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script> --}}
    <!-- calendar js-->
    <script src="{{ asset('backend/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datatable/datatables/datatable.custom1.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('backend/assets/js/rating/jquery.barrating.js') }}"></script>
    <script src="{{ asset('backend/assets/js/rating/rating-script.js') }}"></script>
    <script src="{{ asset('backend/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/vector-map/map-vector.js') }}"></script> --}}
    {{-- <script src="{{ asset('backend/assets/js/countdown.js') }}"></script> --}}
    <script src="{{ asset('backend/assets/js/ecommerce.js') }}"></script>
    <!-- Plugins JS Ends-->

    <!-- start toastr JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {!! @Toastr::message() !!}
    <!-- end toastr JS-->

    <!-- Theme js-->
    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
    <script src="{{ asset('backend/assets/js/script1.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/theme-customizer/customizer.js') }}"></script> --}}
    <!-- Plugin used-->

    <!-- start indivisual js loaded -->
    @stack('js')
    <!-- end indivisual js loaded -->

    
  </body>
</html>