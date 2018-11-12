@extends('master')

@section('main_content')

<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>About</h1><p class="lead text-muted">Music is life. That's why our hearts have beats</p>
            </div>
            <div class="col-lg-3 text-right order-1 order-lg-2">
                <ul class="breadcrumb justify-content-lg-end">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- about us-->
<section class="padding-small">
    <div class="container text-center">   

        <div id="counter-content" class="col-md-3 counter-up p-3 m-sm-3 my-3">
            <div class="counter-content text-center">

                <span class="myCounter">37</span><span>M</span>
                <div class="counter-bottom">
                    Views on Youtube
                </div>
            </div>
        </div>
        <div class="col-md-3 counter-up p-3 m-sm-3 my-3">
            <div class="counter-content text-center">
                <i class="fa-youtube fab"></i>
                <span class="myCounter">260</span><span>K</span>
                <div class="counter-bottom">
                    Youtube Subscribers
                </div>
            </div>
        </div>
        <div class="col-md-3 counter-up p-3 m-sm-3 my-3">
            <div class="counter-content text-center">
                <i class="fab fa-facebook-square"></i>
                <span class="myCounter">39</span><span>K</span>
                <div class="counter-bottom">
                    Facebook Followers
                </div>
            </div>
        </div>
        <div class="col-md-3 counter-up p-3 m-sm-3 my-3">
            <div class="counter-content text-center">
                <i class="fab fa-instagram"></i>
                <span class="myCounter">22</span><span>K</span>
                <div class="counter-bottom">
                    Instagram Followers!
                </div>
            </div>
        </div>
        <div class="col-md-3 counter-up p-3 m-sm-3 my-3">
            <div class="counter-content text-center">
                <i class="fa-film fas"></i>
                <span class="myCounter">150</span>
                <div class="counter-bottom">
                    Videos and growing!
                </div>
            </div>
        </div>
        <div class="col-md-3 counter-up p-3 m-sm-3 my-3">
            <div class="counter-content text-center">
                <i class="fa-music fas"></i>
                <span class="myCounter">111</span>
                <div class="counter-bottom">
                    Sheet Music Available
                </div>
            </div>
        </div>

    </div>
</section>

<section class="padding-small">
    <div class="container">
        <div class="row about-item">
            <div class="col-lg-8 col-sm-9">
                <h2>How it all began</h2>
                <p class="text-muted">David Rigers is an Italian pianist, composer and arranger. He began to play piano at the age of 3. After moving to Milan, he graduated in composition at the Verdi Conservatory and perfected under the guidance of the composer Luciano Berio, his unforgettable maestro.</p>
            </div>
            <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                <div class="about-icon ml-lg-0"><i class="fa fa-line-chart"></i></div>
            </div>
        </div>



        <div class="row about-item">
            <div class="col-lg-8 col-sm-9">
                <h2>Islands album</h2>
                <p class="text-muted">In the fall of 2011, he published Islands album, the album drifts to the first place of the British classical music charts. It recorded in England with the Royal Liverpool Philarmonic Orchestra, a critically acclaimed and successful album (gold record in Italy).</p>
            </div>
            <div class="col-lg-4 col-sm-3 d-none d-sm-flex align-items-center">
                <div class="about-icon ml-lg-0"><i class="fas fa-compact-disc"></i></div>
            </div>
        </div>
    </div>
</section>

<div id="map">                                       </div>




@endsection