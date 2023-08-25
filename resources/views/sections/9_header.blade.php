<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="{{ url('/') }}"><img src="/storage/hero/{{ $hero->logo_d }}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">

                        @foreach ($categories as $category)
                            <li><a href="{{ url('categories-with-products', $category->category) }}"><i
                                        class="surfsidemedia-font-cpu"></i>{{ $category->category }}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="{{ url('/') }}">Home</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="{{ route('abouts') }}">About-us</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="{{ url('user/product') }}">shop</a>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our
                                Collections</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Women's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Dresses</a></li>
                                        <li><a href="product-details.html">Blouses & Shirts</a></li>
                                        <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-details.html">Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Men's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Jackets</a></li>
                                        <li><a href="product-details.html">Casual Faux Leather</a></li>
                                        <li><a href="product-details.html">Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Gaming Laptops</a></li>
                                        <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                        <li><a href="product-details.html">Tablets</a></li>
                                        <li><a href="product-details.html">Laptop Accessories</a></li>
                                        <li><a href="product-details.html">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="{{ url('user/shop') }}">Store</a>
                        </li>

                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->utype === 'ADM')
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">My
                                            Account({{ Auth::user()->name }})</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('admin.category') }}">Dashboard</a></li>
                                            <li><a href="{{ route('profile.show') }}">My Profile</a></li>

                                            <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                            </li>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>

                                        </ul>
                                    @else
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">My
                                            Account({{ Auth::user()->name }})</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('profile.show') }}">My Profile</a></li>

                                            <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                            </li>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>

                                        </ul>
                                    </li>
                                @endif
                            @else
                                <li><a title="Register or Login" href="{{ route('login') }}">Login</a> </li>
                                <li><a title="Register or Login" href="{{ route('register') }}">Register</a></li>


                            @endif
                            @endif




                        </ul>
                    </nav>
                    <!-- mobile menu end -->

                </div>

                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                    <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="header-area header-style-1 header-height-2">


        {{-- <div class="header-top header-top-ptb-1 d-none d-lg-block ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>{{ $hero->text1 }}<a href="{{ url('user/product') }}">View details</a></li>
                                    <li>{{ $hero->text2 }}</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i>
                                        English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img src="assets/imgs/theme/flag-fr.png"
                                                    alt="">Français</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-dt.png"
                                                    alt="">Deutsch</a></li>
                                        <li><a href="#"><img src="assets/imgs/theme/flag-ru.png"
                                                    alt="">Pусский</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">

                            <ul>

                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->utype === 'ADM')


                                            <li><i class="fi-rs-key"></i><a href="#">My Account
                                                    ({{ Auth::user()->name }}) <i class="fa fa-angle-down"
                                                        aria-hidden="true"></i> </a>
                                                <ul class="language-dropdown">
                                                    <li title="Dashboard""><a
                                                            href="{{ route('admin.category') }}">Dashboard</a></li>

                                                    <li title="Dashboard""><a href="{{ route('profile.show') }}">My
                                                            Profile</a></li>


                                                    <li title="Dashboard""> <a
                                                            href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>

                                                </ul>
                                            </li>
                                        @else
                                            <li><i class="fi-rs-key"></i><a href="#">My Account
                                                    ({{ Auth::user()->name }}) <i class="fa fa-angle-down"
                                                        aria-hidden="true"></i> </a>
                                                <ul class="language-dropdown">


                                                    <li title="Dashboard""><a href="{{ route('profile.show') }}">My
                                                            Profile</a></li>

                                                    <li title="Dashboard""> <a
                                                            href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>
                                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>

                                                </ul>
                                            </li>
                                        @endif
                                    @else
                                        <li><i class="fi-rs-key"></i><a href="{{route('login')}}">Log In </a> / <a
                                                href="{{route('register')}}">Sign Up</a></li>


                                    @endif
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="{{ url('/') }}"><img src="/storage/hero/{{ $hero->logo_d }}" alt="logo"
                                    alt="logo"></a>
                        </div>
                        <div class="header-right">
                            <div class="search-style-1">
                                <form action="{{ url('product_search') }}" method="get">@csrf
                                    <input type="text" name="search" placeholder="Search here...">
                                    <button type="submit"><i class="fa fa-search"></i></button>

                                </form>
                            </div>



                            @if (Auth::id())
                                <div class="header-action-right">
                                    <div class="header-action-2">

                                        <div class="header-action-icon-2">
                                            <a class="mini-cart-icon" href="{{ url('my_wishlist') }}">
                                                <img alt="Surfside Media"
                                                    src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                                <span class="pro-count blue">{{ $total_wishlist }}</span>
                                            </a>
                                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                <ul>
                                                    @foreach ($wishlists as $wishlist)
                                                        <li>
                                                            <div class="shopping-cart-img">
                                                                <a
                                                                    href="{{ url('product_details', $wishlist->product_slug) }}"><img
                                                                        alt="Surfside Media"
                                                                        src="storage/product/{{ $wishlist->image }}"></a>
                                                            </div>
                                                            <div class="shopping-cart-category">
                                                                <h4><a
                                                                        href="{{ url('product_details', $wishlist->product_slug) }}">{{ $wishlist->product }}</a>
                                                                </h4>
                                                                <h3><span>{{ $wishlist->sale_price }}</span>
                                                                    ----------
                                                                    <a href="{{ url('delete_wishlist', $wishlist->id) }}"><i
                                                                            class="fi-rs-cross-small"></i></a>
                                                                </h3>

                                                            </div>
                                                            <div class="shopping-cart-delete">

                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="header-action-icon-2">
                                            <a class="mini-cart-icon" href="{{ url('my_cart') }}">
                                                <img alt="Surfside Media"
                                                    src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                                <span class="pro-count blue">{{ $total_cart }}</span>
                                            </a>
                                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                <ul>
                                                    <?php $totalprice = 0; ?>
                                                    @foreach ($carts as $cart)
                                                        <li>
                                                            <div class="shopping-cart-img">
                                                                <a href="{{ url('product_details', $cart->product_slug) }}"><img
                                                                        alt="Surfside Media"
                                                                        src="storage/product/{{ $cart->image }}"></a>
                                                            </div>
                                                            <div class="shopping-cart-category">
                                                                <h4><a
                                                                        href="{{ url('product_details', $cart->product_slug) }}">{{ $cart->product }}</a>
                                                                </h4>
                                                                <h3><span>{{ $cart->quantity }} × ${{ $cart->price }} </span>
                                                                    = {{ $cart->subtotal }} </h3>
                                                            </div>
                                                            <div class="shopping-cart-delete">
                                                                <a href="{{ url('delete_cart', $cart->id) }}"><i
                                                                        class="fi-rs-cross-small"></i></a>
                                                            </div>
                                                        </li>

                                                        <?php $totalprice = $totalprice + $cart->subtotal; ?>
                                                    @endforeach

                                                </ul>
                                                <div class="shopping-cart-footer">
                                                    <div class="shopping-cart-total">
                                                        <h4>Total <span>${{ $totalprice }}</span></h4>
                                                    </div>
                                                    <div class="shopping-cart-button">
                                                        <a href="{{ url('my_cart') }}">View cart</a>
                                                        <a href="{{ url('show_order') }}">My Order</a></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="header-action-right">
                                    <div class="header-action-2">
                                        <div class="header-action-icon-2">
                                            <a href="{{ url('my_wishlist') }}">
                                                <img class="svgInject" alt="Surfside Media"
                                                    src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                                <span class="pro-count blue">0</span>
                                            </a>
                                        </div>
                                        <div class="header-action-icon-2">
                                            <a class="mini-cart-icon" href="{{ url('my_cart') }}">
                                                <img alt="Surfside Media"
                                                    src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                                <span class="pro-count blue">0</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endif



                        </div>
                    </div>
                </div>
            </div>





            <div class="header-bottom header-bottom-bg-color sticky-bar">

                <div class="container">
                    <div class="header-wrap header-space-between position-relative">
                        {{-- <div class="logo logo-width-1 d-block d-lg-none">
                    
                </div> --}}
                        <div class="d-lg-none">
                            <a href="{{ url('/') }}"><img src="/storage/hero/{{ $hero->logo_m }}" alt="logo"></a>
                        </div>


                        <div class="header-nav d-none d-lg-flex">
                            <div class="main-categori-wrap d-none d-lg-block">
                                <a class="categori-button-active" href="#">
                                    <span class="fi-rs-apps"></span> Browse Categories
                                </a>
                                <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                    <ul>

                                        @foreach ($categories as $category)
                                            <li><a href="{{ url('categories-with-products', $category->category) }}"><i
                                                        class="surfsidemedia-font-cpu"></i>{{ $category->category }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="{{ url('/') }}">Home </a></li>
                                        <li><a href="{{ route('abouts') }}">About</a></li>
                                        <li><a href="{{ url('user/product') }}">Shop</a></li>
                                        <li class="position-static"><a href="#">Our Collections <i
                                                    class="fi-rs-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="#">Women's Fashion</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Dresses</a></li>
                                                        <li><a href="product-details.html">Blouses & Shirts</a></li>
                                                        <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                                        <li><a href="product-details.html">Wedding Dresses</a></li>
                                                        <li><a href="product-details.html">Prom Dresses</a></li>
                                                        <li><a href="product-details.html">Cosplay Costumes</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="#">Men's Fashion</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Jackets</a></li>
                                                        <li><a href="product-details.html">Casual Faux Leather</a></li>
                                                        <li><a href="product-details.html">Genuine Leather</a></li>
                                                        <li><a href="product-details.html">Casual Pants</a></li>
                                                        <li><a href="product-details.html">Sweatpants</a></li>
                                                        <li><a href="product-details.html">Harem Pants</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                    <a class="menu-title" href="#">Technology</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Gaming Laptops</a></li>
                                                        <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                                        <li><a href="product-details.html">Tablets</a></li>
                                                        <li><a href="product-details.html">Laptop Accessories</a></li>
                                                        <li><a href="product-details.html">Tablet Accessories</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-mega-menu sub-mega-menu-width-34">
                                                    <div class="menu-banner-wrap">
                                                        <a href="product-details.html"><img
                                                                src="assets/imgs/banner/menu-banner.jpg"
                                                                alt="Surfside Media"></a>
                                                        <div class="menu-banner-content">
                                                            <h4>Hot deals</h4>
                                                            <h3>Don't miss<br> Trending</h3>
                                                            <div class="menu-banner-price">
                                                                <span class="new-price text-success">Save to 50%</span>
                                                            </div>
                                                            <div class="menu-banner-btn">
                                                                <a href="product-details.html">Shop now</a>
                                                            </div>
                                                        </div>
                                                        <div class="menu-banner-discount">
                                                            <h3>
                                                                <span>35%</span>
                                                                off
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('user/shop') }}">Store</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>


                        </div>
                        <div class="hotline d-none d-lg-block">
                            <p><i class="fi-rs-smartphone"></i><span>Toll Free</span>{{ $hero->hotline }} </p>
                        </div>

                        <div class="container mobile-promotion ">
                            <div class="mobile-search search-style-3 mobile-header-border">
                                <form action="{{ url('product_search') }}" method="get">@csrf
                                    <input type="text" placeholder="Search for items…" name="search">
                                    <button type="submit"><i class="fi-rs-search"></i></button>
                                </form>
                            </div>
                        </div>
                        {{-- 
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p> --}}


                        <div class="container mobile-promotion-small ">
                            <div class="mobile-search search-style-3 mobile-header-border">
                                <form action="{{ url('product_search') }}" method="get">@csrf
                                    <input type="text" placeholder="Search for items…" name="search">
                                    <button type="submit"><i class="fi-rs-search"></i></button>
                                </form>
                            </div>
                        </div>


                        <div class="header-action-right d-block d-lg-none">
                            <div class="header-action-2">

                                @if (Auth::id())
                                    <div class="header-action-right">
                                        <div class="header-action-2">
                                            {{-- <div class="header-action-icon-2">
                                        <a href="{{ url('my_wishlist') }}">
                                            <img class="svgInject" alt="Surfside Media"
                                                src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                            <span class="pro-count blue">{{ $total_wishlist }}</span>
                                        </a>
                                    </div> --}}
                                            <div class="header-action-icon-2">
                                                <a class="mini-cart-icon" href="{{ url('my_cart') }}">
                                                    <img alt="Surfside Media"
                                                        src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                                    <span class="pro-count blue">{{ $total_wishlist }}</span>
                                                </a>
                                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                    <ul>
                                                        @foreach ($wishlists as $wishlist)
                                                            <li>
                                                                <div class="shopping-cart-img">
                                                                    <a
                                                                        href="{{ url('product_details', $wishlist->product_slug) }}"><img
                                                                            alt="Surfside Media"
                                                                            src="storage/product/{{ $wishlist->image }}"></a>
                                                                </div>
                                                                <div class="shopping-cart-category">
                                                                    <h4><a
                                                                            href="{{ url('product_details', $wishlist->product_slug) }}">{{ $wishlist->product }}</a>
                                                                    </h4>
                                                                    <h3><span>{{ $wishlist->sale_price }}</span>
                                                                        ----------
                                                                        <a href="{{ url('delete_cart', $wishlist->id) }}"><i
                                                                                class="fi-rs-cross-small"></i></a>
                                                                    </h3>

                                                                </div>
                                                                <div class="shopping-cart-delete">

                                                                </div>
                                                            </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="header-action-icon-2">
                                                <a class="mini-cart-icon" href="{{ url('my_cart') }}">
                                                    <img alt="Surfside Media"
                                                        src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                                    <span class="pro-count blue">{{ $total_cart }}</span>
                                                </a>
                                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                    <ul>
                                                        <?php $totalprice = 0; ?>
                                                        @foreach ($carts as $cart)
                                                            <li>
                                                                <div class="shopping-cart-img">
                                                                    <a href="product-details.html"><img alt="Surfside Media"
                                                                            src="storage/product/{{ $cart->image }}"></a>
                                                                </div>
                                                                <div class="shopping-cart-category">
                                                                    <h4><a href="product-details.html">Plain Striola Shirts</a>
                                                                    </h4>
                                                                    <h3><span>{{ $cart->quantity }} × ${{ $cart->price }}
                                                                        </span> = {{ $cart->subtotal }} </h3>
                                                                </div>
                                                                <div class="shopping-cart-delete">
                                                                    <a href="{{ url('delete_cart', $cart->id) }}"><i
                                                                            class="fi-rs-cross-small"></i></a>
                                                                </div>
                                                            </li>

                                                            <?php $totalprice = $totalprice + $cart->subtotal; ?>
                                                        @endforeach

                                                    </ul>
                                                    <div class="shopping-cart-footer">
                                                        <div class="shopping-cart-total">
                                                            <h4>Total <span>${{ $totalprice }}</span></h4>
                                                        </div>
                                                        <div class="shopping-cart-button">
                                                            <a href="cart.html">View cart</a>
                                                            <a href="shop-checkout.php">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="header-action-right">
                                        <div class="header-action-2">
                                            <div class="header-action-icon-2">
                                                <a href="{{ url('my_wishlist') }}">
                                                    <img class="svgInject" alt="Surfside Media"
                                                        src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                                    <span class="pro-count blue">0</span>
                                                </a>
                                            </div>
                                            <div class="header-action-icon-2">
                                                <a class="mini-cart-icon" href="{{ url('my_cart') }}">
                                                    <img alt="Surfside Media"
                                                        src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                                    <span class="pro-count blue">0</span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                @endif




                                <div class="header-action-icon-2 d-block d-lg-none">
                                    <div class="burger-icon burger-icon-white">
                                        <span class="burger-icon-top"></span>
                                        <span class="burger-icon-mid"></span>
                                        <span class="burger-icon-bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
