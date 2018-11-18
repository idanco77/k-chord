@extends('cms.cms_master')

@section('cms_main')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">DASHBOARD</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card m-b-20">
            <div class="card-body">

                <h4 class="mt-0 header-title">K-Chord's next concert</h4>
<!--                <p class="text-muted m-b-30 font-14">Example of google maps.</p>-->

                <div id="gmaps-markers" class="gmaps"></div>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-lg-6">
        <div class="card m-b-20">
            <div class="card-body">

                <h4 class="mt-0 header-title">K-Chord's office and concert hall</h4>
<!--                <p class="text-muted m-b-30 font-14"></p>-->

                <div id="gmaps-overlay" class="gmaps"></div>
            </div>
        </div>
    </div> <!-- end col -->

    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">

                <h4 class="mt-0 header-title">K-Chords Tours Map</h4>
                <p class="text-muted m-b-30 font-14">Coming soon shows</p>

                <div id="world-map-markers" style="height: 400px"></div>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cart-outline"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-primary">$9851</h3>
            </div>
            <div class="clearfix"></div>
            <p class=" mb-0 m-t-20 text-muted">Total Sales: $22506 <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>10.25%</span></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-usd"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-success">3514</h3>
            </div>
            <div class="clearfix"></div>
            <p class="text-muted mb-0 m-t-20">Total Orders: 3832 <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>8.38%</span></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-primary"><i class="mdi mdi-cube-outline"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-primary">5210</h3>
            </div>
            <div class="clearfix"></div>
            <p class="text-muted mb-0 m-t-20">Total Users: 95,251 <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>3.05%</span></p>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-btc"></i></span>
            <div class="mini-stat-info text-right">
                <h3 class="counter mt-0 text-success">32,548</h3>
            </div>
            <div class="clearfix"></div>
            <p class="text-muted mb-0 m-t-20">Average Visitors: 24,511 <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>22.58%</span></p>
        </div>
    </div>
</div>
<!-- end row -->  

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">

                <h4 class="mt-0 header-title">Orders</h4>

                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                    <li class="list-inline-item">
                        <h5 class="mb-0">362411</h5>
                        <p class="text-muted font-14">Sent</p>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="mb-0">8489</h5>
                        <p class="text-muted font-14">Waiting delivery</p>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="mb-0">25</h5>
                        <p class="text-muted font-14">Canceled</p>
                    </li>
                </ul>

                <div id="website-stats" style="height: 320px" class="flot-chart"></div>

            </div>
        </div>
    </div> <!-- end col -->

    <!-- end col -->
</div> <!-- end row -->



<div class="row">
    <div class="col-xl-3">
        <div class="card m-b-20">

        </div>
    </div>       
</div>
<!-- end row -->
</div><!-- container -->

@endsection