@section('title', 'product_all')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')

    <section class="mt-50 mb-50">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{url('/')}}" rel="nofollow">Home</a>
                    <span></span>Product
                    <span></span>All-Product
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                     <div class="row product-grid-4">
                        @forelse ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">
                         
                          <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="product-details.html">
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
                        {{-- <div class="product-cart-wrap mb-30 " >
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
                        </div> --}}

                        <!--End product-cart-wrap-2-->
                        </div>

                        
                        @empty
                        <div>Product Not Found</div>

                    @endforelse
                    </div>
          
            </div>
        </div>
    </section>
@endsection
