<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>@if(!empty($title)){{ $title }}@else kchord @endif</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />      
      
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('images/favicon-trasp.png') }}">
        
        <!-- Cms template CSS -->
        <link rel="stylesheet" href="{{ asset('lib/canvab/Admin/assets/plugins/chartist/css/chartist.min.css') }}">
        <link href="{{ asset('lib/canvab/Admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('lib/canvab/Admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('lib/canvab/Admin/assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        
        <!-- jvectormap -->
        <link href="{{ asset('lib/canvab/Admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">

        
        <!-- lib toastr css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
        
        <!-- lib jquey-confirm css -->
        <link rel="stylesheet" href="{{ asset('css/jquery-confirm.css') }}"/>
        
        <!-- lib summernote css -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('css/cms_kchord.css') }}"/>
        
        <!-- custom js -->
        <script>const BASE_URL = "{{ url('') }}/"</script>
</head>
<body class="fixed-left">
        
    <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="sk-three-bounce">
                    <div class="sk-child sk-bounce1"></div>
                    <div class="sk-child sk-bounce2"></div>
                    <div class="sk-child sk-bounce3"></div>
                </div>
            </div>
        </div>
    
        <div id="wrapper">
            <!-- Top Bar -->
            @include('cms.cms_inc.topbar')
            
            <!-- Left Sidebar -->
            @include('cms.cms_inc.leftsidebar')
            
            <!-- Start right Content here -->
            <div class="content-page">
                <div class="content">
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            
                            
                            <!-- start main content -->   
                            @yield('cms_main')
                    </div>
                </div>

                <footer class="footer">
                    <hr>
                    <p class="text-center text-secondary">K-Chord by Idan Cohen © {{ date('Y') }}</p>  
                </footer>

            </div>
            <!-- End Right content here -->            

        </div>
        <!-- END wrapper -->

        <!-- Cms template js -->
        <script src="{{ asset('lib/canvab/Admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/js/bootstrap.min.js') }}"></script>    
        <script src="{{ asset('lib/canvab/Admin/assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/js/waves.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/chartist/js/chartist.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/jquery-knob/excanvas.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/pages/dashboard.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/js/app.js') }}"></script>
        
        <!-- Jvector Map js -->
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/jvectormap/gdp-data.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/pages/jvectormap.init.js') }}"></script>

        <!-- google maps api and files -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/gmaps/gmaps.min.js') }}"></script>
        <script src="{{ asset('lib/canvab/Admin/assets/pages/gmaps.js') }}"></script>
        
        <!-- Dashboard orders chart -->
        <script src="{{ asset('lib/canvab/Admin/assets/plugins/flot-chart/jquery.flot.min.js') }}"></script>     
        <script src="{{ asset('lib/canvab/Admin/assets/pages/flot.init.js') }}"></script>

   
        <!-- lib toastr js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
        <!-- lib jquey-confirm js -->
        <script src="{{ asset('js/jquery-confirm.js') }}"></script>
   
        <!-- lib summernote js -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
   
        <!-- custom js -->
        <script src="{{ asset('js/cms_kchord.js') }}"></script>

    @include('inc.sm')
      

   </body>
</html>