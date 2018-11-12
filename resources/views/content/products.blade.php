@extends('master')

@section('main_content')

<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <ul class="breadcrumb justify-content-lg-end">
            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ url('shop') }}">Shop</a></li>
            <li class="breadcrumb-item active">{{ $products[0]->ctitle }}</li>
        </ul>
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>{{ $products[0]->ctitle }}</h1>
                <p class="lead text-muted">{{ $products[0]->carticle }}</p>
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
                <header class="d-flex justify-content-between align-items-start">               

                    <div>                 
                        <a class="btn btn-primary" href="{{ url('shop/' . $products[0]->curl) }}?orderBy=asc">Low price</a>
                        <a class="btn btn-primary" href="{{ url('shop/' . $products[0]->curl) }}?orderBy=desc">High price</a>
                    </div>
                </header>
                <div class="row">
                    <!-- item-->
                    @foreach($products as $product)
                    <div class="item col-xl-4 col-md-6">
                        <div class="product is-gray">
                            <div class="image d-flex align-items-center justify-content-center">
                                <div class="ribbon ribbon-primary text-uppercase">Sale</div>
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                                <div class="hover-overlay d-flex align-items-center justify-content-center">
                                    <div class="CTA d-flex align-items-center justify-content-center">
                                        @if(! Cart::get($product->id))
                                        <button data-id="{{ $product->id }}" class="btn btn-sm btn-block add-to-cart add-to-cart-btn"><i class="mdi mdi-cart-plus"></i> Add to cart</button>
                                        @else
                                        <button disabled="disabled" data-id="{{ $product->id }}" class="btn btn-block btn-sm add-to-cart add-to-cart-btn active"><i class="mdi mdi-lock-outline"></i> In cart</button>
                                        @endif
                                        <a href="{{ url('shop/' . $product->curl . '/'. $product->url) }}" class="visit-product active"><i class="icon-search"></i>View</a>

                                    </div>
                                </div>
                            </div>
                            <div class="title"><a href="{{ url('shop/' . $product->curl . '/'. $product->url) }}">
                                    <h3 class="h6 text-uppercase no-margin-bottom">{{ $product->title }}</h3></a><span class="price text-muted">${{ $product->price }}</span></div>
                        </div>
                    </div>

                    @endforeach


                </div>
                <nav aria-label="page navigation example" class="d-flex justify-content-center">
                    @if(!empty($orderBy))
                    {{ $products->appends(['orderBy' => $orderBy])->links() }}  
                    @else
                    {{ $products->links() }}  
                    @endif
                </nav>           
            </div>

            <!-- / Grid End-->
        </div>
    </div>
</main>


@endsection