@extends('master')

@section('main_content')
<!-- Hero Video-->
<section class="hero-video">
    <video muted loop poster="{{ asset('images/hero-image.png') }}" class="bg-video">
        <source src="{{ asset('videos/hero-video1.webm') }}" type="video/webm">
        <source src="{{ asset('videos/hero-video1.mp4') }}" type="video/mp4">
    </video>
    <div class="container position-relative text-white text-center">
        <div class="row">
            <div class="col-xl-7 mx-auto">
                <h1 class="text-uppercase text-shadow letter-spacing-2 mb-4 add-width">K-Chord Pianist & artist</h1>
                <hr class="bg-light m-5">
                <p class="lead mb-5">David Rigers, known as "K-Chord", was born in Turin, Italy and trained as a classical composer and pianist at the Milan Conservatorio </p><a href="{{ asset('shop') }}" class="btn btn-outline-light px-4 shop-now">SHOP<i class="icon-bag"> </i></a>
            </div>
        </div>
    </div>
</section>
<!-- Tour dates -->
<section class="men-collection gray-bg">
    <div class="container">
        <header class="text-center">
            <h2 class="text-uppercase"><small>Where the dreamers go</small>Tour Dates</h2>
        </header>
        <!-- Products Slider-->
        <div class="owl-carousel owl-theme products-slider">
            <!-- item-->
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('images/upcoming-show3.jpg') }}" alt="Opera House Dresden" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">

                        </div>
                    </div>
                    <div class="title">
                        
                            <h3 class="h6 text-uppercase no-margin-bottom">Dresden Opera House</h3>
                        
                        <span class="price text-muted">20/11/2018</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('images/upcoming-show1.jpg') }}" alt="Zappa Herzliya" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                    <div class="title">
                            <h3 class="h6 text-uppercase no-margin-bottom">Zappa Herzliya</h3><span class="price text-muted">24/11/2018</span></div>
                </div>
            </div>
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('images/upcoming-show2.jpg') }}" alt="Sydney Opera House" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                    <div class="title">
                            <h3 class="h6 text-uppercase no-margin-bottom">Sydney Opera House</h3><span class="price text-muted">27/11/2018</span></div>
                </div>
            </div>
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('images/upcoming-show4.jpg') }}" alt="Beacon Theatre - New York" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                    <div class="title">
                            <h3 class="h6 text-uppercase no-margin-bottom">Beacon Theatre - New York</h3><span class="price text-muted">30/11/2018</span></div>
                </div>
            </div>
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('images/upcoming-show5.jpg') }}" alt="Walt Disney concert hall" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                    <div class="title">
                            <h3 class="h6 text-uppercase no-margin-bottom">Walt Disney Concert Hall</h3><span class="price text-muted">04/12/2018</span></div>
                </div>
            </div>
            <div class="item">
                <div class="product is-gray">
                    <div class="image d-flex align-items-center justify-content-center"><img src="{{ asset('images/upcoming-show6.jpg') }}" alt="Palacio Vistalegre Arena - Madrid" class="img-fluid">
                        <div class="hover-overlay d-flex align-items-center justify-content-center">
                        </div>
                    </div>
                    <div class="title">
                            <h3 class="h6 text-uppercase no-margin-bottom">Palacio Vistalegre Arena - Madrid</h3><span class="price text-muted">08/12/2018</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider Section-->
<section style="background: url({{ asset('images/divider-bg.jpg') }});" class="divider">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-6">

                <h2 class="h1 text-uppercase no-margin">K-Chord</h2>
                <p>Pianos, guitars, wind instrumentals, and much more</p><a href="{{ asset('shop') }}" class="btn btn-template wide shop-now">View products<i class="icon-bag"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Discography Section-->
<section class="categories">
    <div class="container">
        <header class="text-center">
            
            <h2 class="text-uppercase"><small>It's more than just music</small>Discography</h2>
        </header>
        <div class="row text-left">
            <div class="col-lg-4">
                    <div style="background-image: url({{ asset('images/discography3.png') }});" class="item d-flex align-items-end">
                        <div class="content">
                            <h3 class="h5">Birds</h3><span>2015</span>
                        </div>
                    </div></div>
            <div class="col-lg-4">
                    <div style="background-image: url({{ asset('images/discography2.png') }});" class="item d-flex align-items-end">
                        <div class="content">
                            <h3 class="h5">IN A TIME LAPSE</h3><span>2013</span>
                        </div>
                    </div></div>
            <div class="col-lg-4">
                    <div style="background-image: url({{ asset('images/discography1.png') }});" class="item d-flex align-items-end">
                        <div class="content">
                            <h3 class="h5">ISLANDS</h3><span>2011</span>
                        </div>
                    </div></div>
        </div>
    </div>
</section>

<!-- videos Section-->
<section class="blog gray-bg">
    <div class="container">
        <header class="text-center">
            <h2 class="text-uppercase"><small>Where words leave off, music begin</small>Videos</h2>
        </header>
        <div class="row">
            <div class="col-lg-6">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/Kr0IVHzhqro?rel=0&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
            </div>
            <div class="col-lg-6">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/LlqIBKGu7YI?rel=0&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Brands Section-->
<section class="brands">
    <div class="container">
        <header class="text-center">
            
            <h2 class="text-uppercase">Our brands</h2>
        </header>
        <!-- Brands Slider-->
        <div class="owl-carousel owl-theme brands-slider">
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/yamaha.jpg') }}" alt="yamaha" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/roland.gif') }}" alt="roland" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/steinway-and-sons.jpg') }}" alt="steinway and sons" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/kawai.gif') }}" alt="kawai" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/bosendorfer.gif') }}" alt="bosendorfer" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/fazioli.jpg') }}" alt="fazioli" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/gibson.jpg') }}" alt="gibson" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/fender.jpg') }}" alt="fender" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/ibanez.jpg') }}" alt="ibanez" class="img-fluid"></div>
            </div>
            <!-- item-->
            <div class="item d-flex align-items-center justify-content-center">
                <div class="brand d-flex align-items-center"><img src="{{ asset('images/selmer.gif') }}" alt="selmer" class="img-fluid"></div>
            </div>
        </div>
    </div>
</section>
@endsection