@section('title', 'welc')

@extends('layouts.main')
@section('content')


    @include('sections.9_header')


    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <main id="main">
        <div class="container">
            <!--MAIN SLIDE-->
            <div class="wrap-main-slide">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                    data-dots="false">
                    <div class="item-slide">
                        <img src="/storage/hero/{{ $hero->image }}" alt="" class="img-slide" alt="image">
                        <div class="slide-info slide-1">
                            <h2 class="f-title"><b>{{ $hero->line1 }}</b></h2>
                            <span class="subtitle"></span>{{ $hero->line2 }}</span>
                            <p class="sale-info"> <span class="price">{{ $hero->line3 }}</span></p>
                            <a href="{{ url('user/product') }}" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                    <div class="item-slide">
                        <img src="/storage/hero/{{ $hero->img }}" alt="" class="img-slide">
                        <div class="slide-info slide-2">
                            <h2 class="f-title">{{ $hero->line8 }}</h2>
                            <span class="f-subtitle">{{ $hero->line9 }}</span>
                            <p class="discount-code">{{ $hero->line10 }}</p>
                            <h4 class="s-title">{{ $hero->line11 }}</h4>
                            <p class="s-subtitle"></p>{{ $hero->line12 }}</p>
                        </div>
                    </div>
                    <div class="item-slide">
                        <img src="/storage/hero/{{ $hero->images }}" alt="" class="img-slide">
                        <div class="slide-info slide-3">
                            <h2 class="f-title"></b>{{ $hero->link4 }}</b></h2>
                            <span class="f-subtitle">{{ $hero->line5 }}</span>
                            <h4 class="s-title">{{ $hero->line6 }}</h4>
                            <p class="sale-info"><b class="price">{{ $hero->line7 }}</b></p>
                            <a href="#" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--BANNER-->
            <div class="wrap-banner style-twin-default">
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="/storage/hero/{{ $hero->banner1 }}" alt="" width="580" height="190">
                        </figure>
                    </a>
                </div>
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="/storage/hero/{{ $hero->banner2 }}" alt="" width="580" height="190">
                        </figure>
                    </a>
                </div>
            </div>
        </div>


        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p> We found <strong class="text-brand">{{ $total_product }}</strong> items for you!</p>
                            </div>
                            <div class="sort-by-product-area">

                                <div class="sort-by-cover">
                                    <div class="sort-by-product-wrap">
                                        <div class="sort-by">
                                            <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                        </div>
                                        <div class="sort-by-dropdown-wrap">
                                            <span> Store <i class="fi-rs-angle-small-down"></i></span>
                                        </div>
                                    </div>
                                    <div class="sort-by-dropdown">
                                        <ul>
                                            @foreach ($shops as $shop)
                                                <li><a class="active"
                                                        href="{{ url('shop_details', $shop->slug) }}">{{ $shop->shop }}</a>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row product-grid-3">

                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-6 col-12 col-sm-4">
                                    <div class="product-cart-wrap mb-30 " >
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a ref="{{ url('product_details', $product->slug) }}">
                                                    <img class="default-img" src="storage/product/{{ $product->image }}"
                                                        alt="">
                                                    <img class="hover-img" src="storage/product/{{ $product->images }}"
                                                        alt="">
                                                </a>
                                            </div>

                                            <form id="myForm" action="{{ url('add_wishlist', $product->id) }}"
                                                method="POST">@csrf
                                                <div class="product-action-1">
                                                    <a href="{{ url('product_details', $product->slug) }}"
                                                        aria-label="Quick view" class="action-btn     hover-up">
                                                        <i class="fi-rs-search"></i></a>


                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="javascript:void(0);" onclick="submitForm();"><i
                                                            class="fi-rs-heart"></i></a>

                                                    <a aria-label="All-Store" class="action-btn hover-up"
                                                        href="{{ url('user/shop') }}"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </form>



                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{ $product->sale_percent }}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a
                                                    href="{{ url('shop_details', $product->shop_slug) }}">{{ $product->shop }}</a>
                                            </div>
                                            <h2><a
                                                    href="{{ url('product_details', $product->slug) }}">{{ $product->product }}</a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span><a
                                                        href="{{ url('categories-with-products', $product->category) }}">{{ $product->category }}</a></span>
                                            </div>
                                            <div class="product-price">
                                                <span>৳{{ $product->sale_price }} </span>
                                                <span class="old-price">৳{{ $product->regular_price }}</span>
                                            </div>
                                            <div class="product-action-1 show">

                                                <a aria-label="All-Store" class="action-btn hover-up"
                                                    href="{{ url('user/shop') }}"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!--pagination-->
                        {{ $products->links() }}

                    </div>

                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">ক্যাটাগরি</h5>
                            <ul class="categories">
                                @foreach ($categories as $category)
                                    <li><a
                                            href="{{ url('categories-with-products', $category->category) }}">{{ $category->category }}</a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>

                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>

                            @foreach ($nproducts as $nproduct)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="storage/product/{{ $nproduct->image }}" alt="#">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a
                                                href="{{ url('product_details', $nproduct->slug) }}">{{ $nproduct->product }}</a>
                                        </h5>
                                        <p class="price mb-0 mt-5">{{ $nproduct->sale_price }}</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                    </div </div>
                </div>

                <section>
    </main>



    <main class="main">
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <!--Latest Products-->
                <div class="wrap-show-advance-info-box style-1">
                    <h3 class="title-box">Latest Products</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="/storage/hero/{{ $hero->banner3 }}" width="1170" height="240"
                                    alt=""></figure>
                        </a>
                    </div>
                </div>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows">
                    </div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach ($products as $product)
                            <div class="product-cart-wrap small  hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{ url('product_details', $product->slug) }}">
                                            <img class="default-img" src="storage/product/{{ $product->image }}"
                                                alt="">
                                            <img class="hover-img" src="storage/product/{{ $product->images }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                            href="{{ url('product_details', $product->slug) }}">
                                            <i class="fi-rs-eye"></i></a>

                                        <a aria-label="All-Store" class="action-btn small hover-up"
                                            href="{{ url('user/shop') }}" tabindex="0"><i
                                                class="fi-rs-shuffle"></i></a>


                                        <form id="myForm" action="{{ url('add_wishlist', $product->id) }}"
                                            method="POST">@csrf
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                href="javascript:void(0);" onclick="submitForm();" tabindex="0"><i
                                                    class="fi-rs-heart"></i></a>
                                        </form>



                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">{{ $product->sale_percent }}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{ url('shop_details', $product->shop_slug) }}">{{ $product->shop }}</a>
                                    </div>
                                    <h2><a href="{{ url('product_details', $product->slug) }}">{{ $product->product }}</a>
                                    </h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>৳{{ $product->sale_price }} </span>
                                        <span class="old-price">৳{{ $product->regular_price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>

        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-1.png') }}" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-2.png') }}" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-3.png') }}" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-4.png') }}" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-5.png') }}" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('assets/imgs/theme/icons/feature-6.png') }}" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>








        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows">
                    </div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach ($categories as $category)
                            <div class="card-1">
                                <figure class=" img-hover-scale overflow-hidden">
                                    <a href="shop.html"><img src="storage/category/{{ $category->image }}"
                                            alt=""></a>
                                </figure>
                                <h5><a
                                        href="{{ url('categories-with-products', $category->category) }}">{{ $category->category }}</a>
                                </h5>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </section>


        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">


                    @foreach ($shops as $shop)
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="storage/shop/{{ $shop->image }}" alt="">
                                <h4 class="bg-1">{{ $shop->shop }}</h4>
                                <a href="{{ url('shop_details', $shop->slug) }}">Shop Now <i
                                        class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        {{-- <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                         <div class="row product-grid-4">
                            @foreach ($products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                             
    
                              <div class="product-cart-wrap small hover-up">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="{{url('product_details',$product->slug)}}">
                                            <img class="default-img" src="storage/product/{{$product->image}}" alt="">
                                            <img class="hover-img"  src="storage/product/{{$product->images}}" alt="">
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Quick view" class="action-btn small hover-up"   href="{{url('product_details',$product->slug)}}">
                                            <i class="fi-rs-eye"></i></a>
    
                                        <a aria-label="Add To Cart" class="action-btn small hover-up" href="{{url('product_details',$product->slug)}}" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                        
    
                                        <form id="myForm" action="{{url('add_wishlist',$product->id)}}" method="POST">@csrf
                                            <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="javascript:void(0);" onclick="submitForm();" tabindex="0"><i class="fi-rs-heart"></i></a>
                                        </form>
    
                                      
                                      
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">{{$product->sale_percent}}</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="{{url('shop_details',$product->shop_slug)}}">{{ $product->shop}}</a>
                                    </div>
                                    <h2><a href="{{url('product_details',$product->slug)}}">{{$product->product}}</a></h2>
                                    <div class="rating-result" title="90%">
                                        <span>
                                        </span>
                                    </div>
                                    <div class="product-price">
                                        <span>৳{{$product->sale_price}} </span>
                                        <span class="old-price">৳{{$product->regular_price}}</span>
                                    </div>
                                </div>
                            </div>
    
    
    
    
                            <!--End product-cart-wrap-2-->
                            </div>
    

                            
                        @endforeach
                        </div>
                        <!--End product-grid-4-->
                </div>
            </div>
        </section> --}}



    </main>





@endsection
