<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@if(!empty($title)){{ $title }}@else K-Chord @endif</title>
        <meta name="description" content="K-Chords Shop and official website">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="@if(!empty($title)){{ $title }}@else K-Chord @endif">
        <meta name="twitter:description" content="K-Chords Shop and official website">
        <meta name="twitter:image" content="{{ asset('images/' . 'meta-image.jpg') }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="@if(!empty($title)){{ $title }}@else K-Chord @endif" />
        <meta property="og:type" content="K-Chords Shop and official website" />
        <meta property="og:url" content="{{ url('') }}" />
        <meta property="og:image" content="{{ asset('images/' . 'meta-image.jpg') }}" />
        <meta property="og:description" content="K-Chords Shop and official website" /> 
        <meta property="og:site_name" content="K-Chords" />
                
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{ asset('images/favicon-trasp.png') }}">

        <!-- Icons mdi -->
        <link href="{{ asset('lib/canvab/Admin/assets/css/icons.css') }}" rel="stylesheet" type="text/css">

        <!-- Template css -->
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{asset('lib/distribution/vendor/nouislider/nouislider.css')}}">
        <link rel="stylesheet" href="{{ asset('lib/distribution/css/custom-fonticons.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700">
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/owl.carousel/assets/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/distribution/vendor/owl.carousel/assets/owl.theme.default.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/distribution/css/style.default.css') }}" id="theme-stylesheet">
        <link rel="stylesheet" href="{{ asset('lib/distribution/css/custom.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        <!-- lib toastr css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

        <!-- lib jquery-ui autocomplete css -->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- lib imagelightbox css -->
        <link rel="stylesheet" href="{{ asset('css/imagelightbox.css') }}"/>

        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('css/kchord.css') }}"/>

        <!-- template js -->
        <script src="{{ asset('lib/distribution/js/modernizr.custom.79639.js') }}"></script>

        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <!-- custom js -->
        <script>const BASE_URL = "{{ url('') }}/"</script>
    </head>
    <body>

        @include('inc.mainnav')

        @yield('main_content')
        @if(isset($ads))
        <div class="col-md-12 d-none d-md-block" id="top-strip-v_2017" style="position:sticky; bottom: 0; z-index: 999999;">
            <div>
                <span class="picg TopPageStripNeo"></span>
                <a href="{{ $ads[$random]['url'] }}" target="_blank" style="text-decoration: none; border: 0;">
                    <img class="img-fluid" src="{{ asset('images/' . $ads[$random]['image']) }}" alt="{{ $ads[$random]['title']}}" title="{{ $ads[$random]['title']}}" width="960" height="48" style="border: 0;">
                </a>
            </div>

        </div>
        @endif
        @include('inc.footer')


        <!-- template js -->
        <script src="{{ asset('lib/distribution/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/popper.js/umd/popper.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/vendor/jquery-countdown/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('lib/distribution/js/front.js') }}"></script>
        <script>
var snapSlider = document.getElementById('slider-snap');

noUiSlider.create(snapSlider, {
    start: [40, 110],
    snap: false,
    connect: true,
    step: 1,
    range: {
        'min': 0,
        'max': 250
    }
});
var snapValues = [
    document.getElementById('slider-snap-value-lower'),
    document.getElementById('slider-snap-value-upper')
];
snapSlider.noUiSlider.on('update', function (values, handle) {
    snapValues[handle].innerHTML = values[handle];
});

        </script>

        <!-- lib toastr js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- lib jquery-ui js -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <!-- lib imagelightbox js -->
        <script src="{{ asset('js/imagelightbox.js') }}"></script>

        <!-- lib jquery counter up -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js"></script>
        <script src="{{ asset('js/lem_counter.js') }}"></script>

        <!-- Google api -->
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWiXpRWwXBi2ujO1FU0iGwEDlk3lsZBZk"></script>
     
        <!-- custom js -->
        <script src="{{ asset('js/kchord.js') }}"></script>

        @include('inc.sm')



    </body>
</html>