@extends('master')

@section('main_content')

<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>Your orders</h1><p class="lead">Your orders in one place.</p>
            </div>
            <div class="col-lg-3 text-right order-1 order-lg-2">
                <ul class="breadcrumb justify-content-lg-end">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active">Orders</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="padding-small">
    <div class="container">
        <div class="row">
            <!-- Customer Sidebar-->
            <div class="customer-sidebar col-xl-3 col-lg-4 mb-md-5">
    <div class="customer-profile"><a href="#" class="d-inline-block"><img src="{{ asset('images/' . $profile['image']) }}" class="img-fluid rounded-circle customer-image"></a>
        <h5>{{ $profile['name'] }}</h5>
        <p class="text-muted text-small">{{ $profile['address'] }}</p>
    </div>
    <nav class="list-group customer-nav">
        <a href="{{ url('profile') }}" class="active list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-bag"></span>Orders</span></a>
        <a href="{{ url('profile/' . $profile['id']) }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Profile</span></a>
        <a href="{{ url('profile/' . $profile['id'] . '/edit') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="icon icon-profile"></span>Edit profile</span></a>
        <a href="{{ url('user/logout') }}" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="mdi mdi-logout"></span> Log out</span></a>
    </nav>
</div>
            @if($orders)
            <div class="col-lg-8 col-xl-9 pl-lg-3 table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>Date</th>
                            <th>Products</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <th>#{{ $order->id }}</th>
                            <td>{{ date('d/m/Y \a\t H:i', strtotime($order->updated_at)) }}</td>
                            <td>
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Subtoal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(unserialize($order->data) as $item)
                                        <tr>
                                            <td>{{ $item['name'] }}</td>
                                            <td>{{ $item['quantity'] }}</td>
                                            <td>${{ $item['price'] }}</td>
                                            <td>${{ $item['quantity'] * $item['price'] }}</td>
                                        </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                                
                            </td>
                           

                            <td>${{ $order->total_price_include_tax }}</td>


                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p class="h3 text-warning"><i class="far fa-frown"></i> <i>No orders. make an order and comeback</i></p>
            @endif
            
        </div>
    </div>
</section>

@endsection