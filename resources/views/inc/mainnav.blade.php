<!-- navbar-->
<header class="header">

    <nav class="navbar navbar-expand-lg">

        <div class="container-fluid">  
            <!-- Navbar Header  --><a href="{{ url('') }}" class="navbar-brand"><img id="full-logo" src="{{ asset('images/full-logo-transparent.png') }}" alt="kchord logo"></a>
            <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            <!-- Navbar Collapse -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="{{ url('') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ url('shop') }}" class="nav-link">Shop</a></li>
                    <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
                    @if(! empty($menu))
                    @foreach($menu as $item)
                    <li class="nav-item"><a href="{{ url($item->url) }}" class="nav-link">{{ $item->link }}</a></li>
                    @endforeach
                    @endif
                </ul>
                <div class="right-col d-flex align-items-lg-center flex-column flex-lg-row">

                    <!-- Search field-->  
                    <ul class="navbar-nav mx-auto">
                        <form action="#" method="GET">                    
                            <input type="text" autocomplete="off" name="search" id="search" class="form-control-search" placeholder="search products">
                            <datalist id="drw-list"></datalist>
                        </form>
                    </ul>


                    <!-- User Not Logged - link to login page-->
                    @if(! Session::has('user_id'))

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a id="navbarHomeLink" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul aria-labelledby="navbarDropdownHomeLink" class="dropdown-menu">
                                <li>
                                    <a id="userdetails" href="{{ url('user/login') }}" class="dropdown-item">
                                         <small><i class="fas fa-sign-in-alt"></i> Login</small>                             
                                    </a>
                                </li>
                                <li>
                                    <a id="userdetails" href="{{ url('user/register') }}" class="dropdown-item">
                                        <small><i class="fas fa-user-plus"></i> Register</small>                             
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    @else
                    <div class="user"> 
                        <a id="userdetails" href="{{ url('profile') }}" class="user-link">
                            <img class="profile-image-style" src="{{ asset('images/' . Session::get('user_image')) }}" alt="profile-image">
                            <small>{{ Session::get('user_name') }}</small>                            
                        </a>
                    </div>
                    @if(Session::has('is_admin'))
                    <div class="user"> 
                        <a id="userdetails" href="{{ url('cms/dashboard') }}" class="user-link">                            
                            <small>Admin Panel</small>                            
                        </a>
                    </div>
                    @endif
                    <div class="user"> 
                        <a id="userdetails" href="{{ url('user/logout') }}" class="user-link">
                            <i class="fas fa-sign-out-alt"></i> <small>Logout</small>                             
                        </a>
                    </div>

                    @endif

                    <!-- Cart Dropdown-->
                    <div class="cart dropdown show">
                        <a id="cartdetails" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                            <i class="icon-cart"></i>
                            <div class="cart-no">{{Cart::getTotalQuantity()}}</div>
                        </a>
                        <a href="{{ url('shop/checkout') }}" class="text-primary view-cart">View Cart</a>
                        <div aria-labelledby="cartdetails" class="dropdown-menu">
                            <!-- cart item-->
                            @if(Cart::getTotalQuantity() >= 1)

                            <div class="dropdown-item cart-product">

                                @foreach(Cart::getContent()->toArray() as $item)

                                <div class="d-flex align-items-center">

                                    <div class="img">
                                        <img src="{{ asset('images/' . $item['attributes']['img']) }}" alt="{{ $item['name'] }}" class="img-fluid">
                                    </div>
                                    <div class="details d-flex justify-content-between">
                                        <div class="text"> 
                                            <strong>{{ $item['name'] }}</strong>
                                            <small>Quantity: {{ $item['quantity'] }} </small><span class="price">${{ $item['price'] }} </span>
                                        </div>
                                        <a href="{{ url('shop/remove-item/' . $item['id']) }}" class="delete"><i class="far fa-trash-alt"></i></i></a>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                            <!-- total price-->
                            <div class="dropdown-item total-price d-flex justify-content-between"><span>Total</span><strong class="text-primary">${{ Cart::getSubTotal() }}</strong></div>
                            <!-- call to actions-->
                            <div class="dropdown-item CTA d-flex">

                                <a href="{{ url('shop/checkout') }}" class="btn btn-template wide">Checkout</a>
                            </div>
                            @else
                            <p><i>No items in cart</i></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>