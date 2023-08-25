@section('title', 'dashboard')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')





<main class="main">
    <section class="mt-50 mb-50">
        <div class="container custom">
          
          <!--Latest Products-->
          <div class="wrap-show-advance-info-box style-1">
              <h3 class="title-box">Latest Products</h3>
              <div class="wrap-top-banner">
                  <a href="#" class="link-banner banner-effect-2">
                      <figure><img src="assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt=""></figure>
                  </a>
              </div>
              {{-- <div class="wrap-products">
                  <div class="wrap-product-tab tab-style-1">						
                      <div class="tab-contents">
                          <div class="tab-content-item active" id="digital_1a">
                              <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
   
                                  @foreach ($products as $product)
                                  <div class="product product-style-2 equal-elem ">
                                      <div class="product-thumnail">
                                          <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                              <figure>
                                                  <img class="default-img" src="storage/product/{{$product->image}}" alt="">
                                                 
                                              </figure>
                                          </a>
                                          <div class="group-flash">
                                              <span class="flash-item new-label">new</span>
                                          </div>
                                          <div class="wrap-btn">
                                              <a href="{{url('product_details',$product->slug)}}" class="function-link">quick view</a>
                                          </div>
                                      </div>
                                      <div class="product-info">
                                          <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                          <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                      </div>
                                  </div>
                                  @endforeach
                               
  
                          
  
                              </div>
                          </div>							
                      </div>
                  </div>
              </div> --}}
          </div>
         <div class="row mt-10 ">
            <div class="col-lg-3 primary-sidebar sticky-sidebar">
                <div class="widget-area">
                    <div class="sidebar-widget widget_search mb-50">
                        <div class="search-form">
                          <form action="{{url('shop_search')}}" method="get">@csrf
                                <input type="text"  name="search" placeholder="Search…">
                                <button type="submit"> <i class="fi-rs-search"></i> </button>
                            </form>
                        </div>
                    </div>
                    <!--Widget categories-->
                    <div class="sidebar-widget widget_categories mb-40">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title">Categories</h5>
                        </div>
                        <div class="post-block-list post-module-1 post-module-5">
                            <ul>
                                @foreach ($categories as $category)
                                <li class="cat-item cat-item-2"><a href="{{url('categories-with-products',$category->category)}}">{{$category->category}}</a> (3)</li>
                                @endforeach
                        
                            </ul>
                        </div>
                    </div>
              
                </div>
            </div>
            <div class="col-lg-6">
                  @forelse($shops as  $shop)
                  <div class="col-lg-4 col-md-4 mb-md-3 mb-lg-0">
                    <div class="banner-features wow fadeIn animated hover-up">
                        <img src="storage/shop/{{$shop->image}}" alt="">
                        <h4 class="bg-1">{{$shop->shop}}</h4>
                        <a href="{{url('shop_details',$shop->slug)}}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
                  @empty
                  <div>Not shop found</div>
                  @endforelse 
                </div>

                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="row">
                        <div class="col-lg-12 col-mg-6"></div>
                        <div class="col-lg-12 col-mg-6"></div>
                    </div>
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">ক্যাটাগরি</h5>
                        <ul class="categories">
                            {{-- @foreach ($categories as $category)
                            <li><a href="{{url('categories-with-products',$category->category)}}">{{$category->category}}</a></li>
                            @endforeach
                   --}}
                     
                        </ul>
                    </div>
                 
                   
                </div>
            
            </div>
        </div>
    </section>
  </main>


@endsection
