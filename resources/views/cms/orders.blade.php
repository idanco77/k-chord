@extends('cms.cms_master')

@section('cms_main')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">USERS ORDERS</h4>
        </div>
    </div>
</div>

@if($orders)
<table class="table table-bordered text-center table-hover">
    <thead>
        <tr>
            <th>User</th>
            <th>Order detail</th>
            <th>Price</th>
            <th>Price with tax</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->name }}</td>
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
            <td>${{ $order->price_exclude_tax }}</td>
            <td>${{ $order->total_price_include_tax }}</td> 
            <td> {{ date('d/m/Y \a\t H:i', strtotime($order->created_at)) }} </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif




</div><!-- container -->

@endsection