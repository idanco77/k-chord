@extends('master')

@section('main_content')

    <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
          <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('shop') }}">Shop</a></li>
              <li class="breadcrumb-item active">Checkout</li>
            </ul>
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>Shopping cart</h1><p class="lead text-muted">You currently have {{ Cart::getTotalQuantity() }} items in your shopping cart</p>
          </div>
          
        </div>
      </div>
    </section>
    
    <!-- Shopping Cart Section-->
    @if($cart)
    <section class="shopping-cart">
      <div class="container">
        <div class="basket">
          <div class="basket-holder">
            <div class="basket-header">
              <div class="row">
                <div class="col-5">Product</div>
                <div class="col-2">Price</div>
                <div class="col-2">Quantity</div>
                <div class="col-2">Total</div>
                <div class="col-1 text-center">Remove</div>
              </div>
            </div>
            <div class="basket-body">
              <!-- Product-->
              @foreach ($cart as $item)
              <div class="item">
                <div class="row d-flex align-items-center">
                  <div class="col-5">
                    <div class="d-flex align-items-center"><img src="{{ asset('images/' . $item['attributes']['img']) }}" alt="{{ $item['name'] }}" class="img-fluid">
                      <div class="title">
                          <a href="detail.html"><h5>{{ $item['name'] }}</h5></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-2"><span>${{ $item['price'] }}</span></div>
                  <div class="col-2">
                    <div class="d-flex align-items-center">
                      <div class="quantity d-flex align-items-center">
                          <div class="dec-btn update-cart" data-id="{{ $item['id'] }}" data-op="minus">-</div>
                        <input type="text" value="{{ $item['quantity'] }}" class="quantity-no">
                        <div class="inc-btn update-cart" data-id="{{ $item['id'] }}" data-op="plus">+</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-2"><span>${{ $item['price'] * $item['quantity'] }}</span></div>
                  <div class="col-1 text-center"> <a href="{{ url('shop/remove-item/' . $item['id']) }}"><i class="delete mdi mdi-delete-variant"></i></a></div>
                </div>
              </div>
             @endforeach
            </div>
          </div>
        </div>
      </div>
      
    </section>
   

    <!-- Order Details Section-->
    <section class="order-details no-padding-top"> 
      <div class="container">
        <div class="row">                         
          
          <div class="col-lg-6">
            <div class="block">
              <div class="block-header">
                <h6 class="text-uppercase">Order Summary</h6>
              </div>
              <div class="block-body">
                <p>Shipping and additional costs are calculated based on values you have entered.</p>
                <ul class="order-menu list-unstyled">
                  <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>${{ Cart::getTotal() }}</strong></li>
                  <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>$0.00</strong></li>
                  <li class="d-flex justify-content-between"><span>Tax: 20%</span><strong>${{ Cart::getTotal() * 0.2 }}</strong></li>
                  <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">${{ Cart::getTotal() + (Cart::getTotal() * 0.2) }}</strong></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center CTAs">
              <a href="{{ url('shop/order') }}" class="btn btn-template btn-lg wide">Proceed to checkout<i class="mdi mdi-chevron-double-right"></i></a>
          </div>
            <div class="container">
        <div class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
            <a href="{{ url('shop/clear-cart') }}" class="btn btn-template-outlined wide"><i class="mdi mdi-cart-off"></i> Clear cart</a>
            
        </div>
      </div>
        </div>
      </div>
    </section>
     @else
    <p class="display-3 text-center py-5 my-5"><i>No items in the cart</i></p>
    @endif

@endsection