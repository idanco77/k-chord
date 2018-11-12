<div id="scrollTop"><i class="fas fa-long-arrow-alt-up"></i></div>
<!-- Footer-->
<footer class="main-footer">
   
    <!-- Main Block -->
    <div class="main-block">
        <div class="container">
            <div class="row">
                <div class="info col-lg-6">
                    <div class="logo"><img src="{{ asset('images/full-logo-transparent.png') }}" alt="k-chord logo"></div>
                    <blockquote class="blockquote">
                    <p>"When you play, never mind who listens to you"</p>
                    <footer class="blockquote-footer">Robert Schumann</footer>
                    </blockquote>
                    
                    <ul class="social-menu list-inline">
                        <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fab fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fab fa-vimeo"></i></a></li>
                    </ul>
                </div>
                <div class="site-links col-lg-2 col-md-6">
                    <h5 class="text-uppercase">K-Chord</h5>
                    <ul class="list-unstyled">
                        <li> <a href="{{ url('') }}">Home</a></li>
                        <li> <a href="{{ url('shop') }}">Shop</a></li>
                        @if($menu)
                        @foreach($menu as $item)
                        <li><a href="{{ url($item->url) }}">{{ $item->link }}</a></li>
                        @endforeach
                        @endif                        
                    </ul>
                </div>
                <div class="site-links col-lg-2 col-md-6">
                    <h5 class="text-uppercase">Shop</h5>
                    <ul class="list-unstyled">
                        @if(isset($catDetails) && $catDetails)
                        @foreach($catDetails as $categoryItem)
                        <li> <a href="{{ url('shop/' . $categoryItem->url) }}">{{ $categoryItem->title }}</a></li>
                        @endforeach
                        @endif
                        <li> <a href="{{ url('shop/checkout') }}">Checkout</a></li>
                        
                    </ul>
                </div>
                <div class="site-links col-lg-2 col-md-6">
                    <h5 class="text-uppercase">User</h5>
                    <ul class="list-unstyled">
                        <li> <a href="{{ url('user/login') }}">Login</a></li>
                        <li> <a href="{{ url('user/register') }}">Register</a></li>
                        <li> <a href="{{ url('user/logout') }}">Logout</a></li>
                        
                    </ul>
                </div>
                
                
                
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="text col-md-6">
                    <p>&copy; {{ date('Y') }} <a href="http://www.idan.work" target="_blank">Idan Cohen</a> All rights reserved.</p>
                </div>
                <div class="payment col-md-6 clearfix">
                    <ul class="payment-list list-inline-item pull-right">
                        <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/visa.svg') }}" alt="visa"></li>
                        <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/mastercard.svg') }}" alt="mastercard"></li>
                        <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/paypal.svg') }}" alt="paypal"></li>
                        <li class="list-inline-item"><img src="{{ asset('lib/distribution/img/western-union.svg') }}" alt="western-union"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>