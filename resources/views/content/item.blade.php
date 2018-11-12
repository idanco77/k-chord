@extends('master')

@section('main_content')

 <!-- Hero Section-->
    <section class="hero hero-page gray-bg padding-small">
      <div class="container">
          <ul class="breadcrumb justify-content-lg-end">
              <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('shop') }}">Shop</a></li>
              <li class="breadcrumb-item"><a href="{{ url('shop/' . $product->curl) }}">{{ $product->ctitle }}</a></li>
              <li class="breadcrumb-item active">{{ $product->title }}</li>
            </ul>
        <div class="row d-flex">
          <div class="col-lg-9 order-2 order-lg-1">
            <h1>{{ $product->title }}</h1>
          </div>         
        </div>
      </div>
    </section>
    <main>
      <div class="container">
        <div class="row">
          <!-- Sidebar-->
          <div class="sidebar col-xl-3 col-lg-4 sidebar">
            <div class="block">
                <h6 class="text-uppercase"><a class="d-flex justify-content-between align-items-center" href="{{ url('shop') }}">Product Categories</a></h6>
              @if($categories)
              <ul class="list-unstyled">
                  @foreach($categories as $category)
                <li>
                    <a href="{{ url('shop/' . $category['url']) }}" class="d-flex justify-content-between align-items-center">
                        <span>{{ $category['title'] }}</span>
                    </a>
                </li>
                @endforeach
               </ul>
              @else
              <p><i>No Categories</i></p>
              @endif
            </div>           
          </div>
          <!-- /Sidebar end-->
          <!-- Grid -->
          <div class="products-grid col-xl-9 col-lg-8 sidebar-left">
              <section class="product-details">
      <div class="container">
        <div class="row">
          <div class="product-images col-lg-6">
            <div class="ribbon-primary text-uppercase">Sale</div>
            <div data-slider-id="1" class="owl-carousel items-slider owl-drag">
              <div class="item"><img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}"></div>
              <div class="item"><img src="{{ asset('images/' . $product->image2) }}" alt="{{ $product->title }}"></div>
              <div class="item"><img src="{{ asset('images/' . $product->image3) }}" alt="{{ $product->title }}"></div>
              <div class="item"><img src="{{ asset('images/' . $product->image4) }}" alt="{{ $product->title }}"></div>
            </div>
            <div data-slider-id="1" class="owl-thumbs d-flex align-items-center justify-content-center">
                <a class="owl-thumb-item" data-imagelightbox="demo" href="{{ asset('images/' . $product->image) }}"><img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}"></a>
              <a class="owl-thumb-item active" data-imagelightbox="demo" href="{{ asset('images/' . $product->image2) }}"><img src="{{ asset('images/' . $product->image2) }}" alt="{{ $product->title }}"></a>
              <a class="owl-thumb-item" data-imagelightbox="demo" href="{{ asset('images/' . $product->image3) }}"><img src="{{ asset('images/' . $product->image3) }}" alt="{{ $product->title }}"></a>
              <a class="owl-thumb-item" data-imagelightbox="demo" href="{{ asset('images/' . $product->image4) }}"><img src="{{ asset('images/' . $product->image4) }}" alt="{{ $product->title }}"></a>
            </div>
          </div>
          <div class="details col-lg-6">
            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
              <ul class="price list-inline no-margin">
                <li class="list-inline-item current">${{ $product->price }}</li>
                <li class="list-inline-item original">${{ $product->orgnl_price }}</li>
             </ul>
               
            </div>
            @if($product->stock > 0)
            <p>{{ $product->stock }} pieces available</p>
            @else
            <p>Not available</p>
            @endif
            <p>{!! $product->article !!}</p>
            
            <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
             
             
            </div>
            @if($product->stock > 0)
            <ul class="CTAs list-inline">
                @if(! Cart::get($product->id))
                <li class="list-inline-item"><button data-id="{{ $product->id }}" class="btn btn-template btn-block wide add-to-cart-btn"><i class="mdi mdi-cart-plus"></i> Add to cart</button></li> <br><br>
                @else
                <li class="list-inline-item"> <button disabled="disabled" data-id="{{ $product->id }}" class="btn btn-block btn-template wide add-to-cart-btn"><i class="mdi mdi-lock-outline"></i> In cart</button></li> <br><br>
                @endif
                
                <li class="list-inline-item"><a href="{{ url('shop/checkout') }}" class="btn btn-block btn-template-outlined wide"><i class="mdi mdi-shopping"></i> Checkout</a></li>
            </ul>
            @else
            <ul class="CTAs list-inline">
                <li class="list-inline-item"> <input type="button" disabled="disabled" value="Out of stock" class="btn btn-block btn-template wide add-to-cart-btn"></li> <br><br>
            </ul>
            @endif
          </div>
        </div>
      </div>
    </section>
    <section class="product-description no-padding"> 
        <div class="container-fluid">
        <div class="share-product gray-bg d-flex align-items-center justify-content-center flex-column flex-md-row"><strong class="text-uppercase">Share this on</strong>
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
            <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fab fa-vimeo"></i></a></li>
          </ul>
        </div>
      </div>
    </section>
          </div>
          <!-- / Grid End-->
        </div>
      </div>
    </main>


@endsection