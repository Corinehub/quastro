<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> {{ "QUASTROM DAO - "}} @yield('page_title') </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="/assets/images/images/brand-logos/favicon.ico" type="image/x-icon"> 
    
    <!-- Choices JS -->
    <script src="/assets/libs/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Main Theme Js -->
    <script src="/assets/js/main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="/assets/libs/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="/assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="/assets/css/icons.css" rel="stylesheet" >
    
    <!-- Node Waves Css -->
    <link href="/assets/libs/libs/node-waves/waves.min.css" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="/assets/libs/libs/simplebar/simplebar.min.css" rel="stylesheet" >

    <!-- Color Picker Css -->
    <link href="/assets/libs/libs/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link  href="/assets/libs/libs/@simonwep/pickr/themes/nano.min.css" rel="stylesheet">

    <!-- Choices Css -->
    <link  href="/assets/libs/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">


    <link href="/assets/libs/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" >

    <link href="/assets/libs/libs/swiper/swiper-bundle.min.css"  rel="stylesheet">


    <link rel="stylesheet" href="/assets/libs/libs/quill/quill.snow.css">
    <link rel="stylesheet" href="/assets/libs/libs/quill/quill.bubble.css">

    @stack('css')

</head>

<body>

 
 
    <!-- Loader -->
    <div id="loader" >
        <img src="/assets/images/images/media/loader.svg" alt="">
    </div>
    <!-- Loader --> 

    <div class="page">
         <!-- app-header -->
          @include('layouts.partials.headerworker') 
        <!-- /app-header -->   

        <!-- Start::app-sidebar -->
         @include('layouts.partials.sidebarworker')
        <!-- End::app-sidebar -->    

        <!-- Start::app-content -->
        <div class="main-content app-content">
           @yield('content')
        </div>
        <!-- End::app-content -->
        
        
        <!--Search Modal Popup-->
         @include('layouts.partials.search-modal') 
        <!--Search Modal Popup--> 


        <!--Country Modal Popup-->
         @include('layouts.partials.country-modal') 
        <!--Country Modal Popup--> 

        <!-- Footer Start -->
         @include('layouts.partials.footer') 
        <!-- Footer End --> 

    </div> 

    
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="/assets/libs/libs/@popperjs/core/umd/popper.min.js"></script>

     <!-- Bootstrap JS -->
    <script src="/assets/libs/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

       <!-- Defaultmenu JS -->
     <script src="/assets/js/defaultmenu.min.js"></script>

     <!-- Node Waves JS-->
    <script src="/assets/libs/libs/node-waves/waves.min.js"></script>

        <!-- Sticky JS -->
    <script src="/assets/js/sticky.js"></script>

      <!-- Simplebar JS -->
    <script src="/assets/libs/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/js/simplebar.js"></script>

     <!-- Color Picker JS -->
    <script src="/assets/libs/libs/@simonwep/pickr/pickr.es5.min.js"></script>

     <!-- JSVector Maps JS -->
    <script src="/assets/libs/libs/jsvectormap/js/jsvectormap.min.js"></script> 

      <!-- JSVector Maps MapsJS -->
    <script src="/assets/libs/libs/jsvectormap/maps/world-merc.js"></script> 

      <!-- Apex Charts JS -->
    <script src="/assets/libs/libs/apexcharts/apexcharts.min.js"></script>

      <!-- Chartjs Chart JS -->
    <script src="/assets/libs/libs/chart.js/chart.min.js"></script>

      <!-- CRM-Dashboard -->
    <script src="/assets/js/crm-dashboard.js"></script>

       <!-- Custom JS -->
     <script src="/assets/js/custom.js"></script>

     <!-- Custom-Switcher JS -->
    <script src="/assets/js/custom-switcher.min.js"></script>
    
    @stack('js')

</body>

</html>