@section('title', 'dashboard')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')



 

<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{url('/')}}" rel="nofollow">Home</a>
                <span>
                    <a href="{{url('user/shop')}}" rel="nofollow">Store</a></a>
                </span>
              
                <span>Store-Details</span>
       
              
         
            </div>

             <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt=""></figure>
                </a>
            </div>
          
        </div>

            

        </div>
    </div>
    
  <section class="mt-50 mb-50">
      <div class="container custom">
          <div class="row">
              <div class="col-lg-9">
                  <div class="single-page pr-30">
                      <div class="single-header style-2">
                           <h1 class="mb-30 ">{{$shops->title}}</h1>
                          <div class="single-header-meta">
                              <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                  <span class="post-by">By <a href="#">{{$shops->name}}</a></span>
                                  <span class="time-reading has-dot">{{$shops->owner}}</span>
                                  <span class="hit-count  has-dot">{{$shops->location}}</span>
                              </div>
                              <div class="social-icons single-share">
                                  <ul class="text-grey-5 d-inline-block">
                                      <li><strong class="mr-10">Share this:</strong></li>
                                      <li class="social-facebook"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a></li>
                                      <li class="social-twitter"> <a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a></li>
                                      <li class="social-instagram"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a></li>
                                      <li class="social-linkedin"><a href="#"><img src="{{asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <figure class="single-thumbnail">
                        <img style="height:700px; width:100%;" class="img-fluid"
                        src="/storage/shop/{{ $shops->image }}" alt="image">
                      </figure>
                      <div class="single-content">
                          <p class="text-red-900 ">{{$shops->description}}</p>
                       
                      </div>
                  </div>
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
                        <li><a href="{{url('categories-with-products',$category->category)}}">{{$category->category}}</a></li>
                        @endforeach
              
                 
                    </ul>
                </div>
             
                <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                    <div class="widget-header position-relative mb-20 pb-10">
                        <h5 class="widget-title mb-10">Our products</h5>
                        <div class="bt-1 border-color-1"></div>
                    </div>

                    @foreach ($nproducts as $nproduct)
                    <div class="single-post clearfix">
                        <div class="image">
                            <img src="storage/product/{{$nproduct->image}}" alt="#">
                        </div>
                        <div class="content pt-10">
                            <h5><a href="{{url('product_details',$nproduct->slug)}}">{{$nproduct->product}}</a></h5>
                            <p class="price mb-0 mt-5">{{$nproduct->sale_price}}</p>
                            <div class="product-rate">
                                <div class="product-rating" style="width:90%"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                  
                </div>
            </div>
          </div>
      </div>
  </section>

  
</main>

@endsection
