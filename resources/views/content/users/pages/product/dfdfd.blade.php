@section('title', 'product_details')
<base href="/public">
@extends('layouts.main')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const facebookIcon = document.getElementById("facebookIcon");
        facebookIcon.addEventListener("click", handleFacebookClick);

        function handleFacebookClick() {
            const postMessage = `Just clicked on ${product.name}. ${product.description}`;
            const userId = "YOUR_USER_ID"; // Replace with the user's ID

            postOnFacebook(userId, postMessage);
        }

        function postOnFacebook(userId, message) {
            const accessToken = "YOUR_ACCESS_TOKEN"; // Replace with your access token

            fetch(`https://graph.facebook.com/${userId}/feed`, {
                method: "POST",
                body: `message=${encodeURIComponent(message)}&access_token=${accessToken}`
            })
            .then(response => response.json())
            .then(data => {
                console.log("Posted on Facebook:", data);
            })
            .catch(error => {
                console.error("Error posting on Facebook:", error);
            });
        }
    });
</script>
@section('content')

    @include('sections.9_header')
    @include('sections.header')

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{url('/')}}" rel="nofollow">Home</a>
                    <span>
                        <a href="{{url('user/product')}}" rel="nofollow">Product</a>
                    </span>
                  
                    <span>Product-Details</span>
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
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
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{ $product->image }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{ $product->images }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{ $product->img }}" alt="product image">
                                            </figure>

                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{ $product->image }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{ $product->images }}" alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="storage/product/{{ $product->img }}" alt="product image">
                                            </figure>



                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="storage/product/{{ $product->image }}" alt="product image"></div>

                                            <div><img src="storage/product/{{ $product->images }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->img }}" alt="product image"></div>

                                            <div><img src="storage/product/{{ $product->image }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->images }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->img }}" alt="product image"></div>



                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a
                                                    href="#" id="facebookIcon""
                                                    class="text-hide" title="Share" target="_blank"
                                                    rel="noopener noreferrer" class="text-hide" title="Tweet"
                                                    target="_blank" rel="noopener noreferrer"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"
                                                        alt=""></a></li>


                                            <li class="social-twitter"> <a
                                                    href="https://twitter.com/intent/tweet?text=Samsung+Solo+Micro+Wave+Oven+MW73AD-B%2C+20+L%20https%3A%2F%2Fdemo74.leotheme.com%2Fprestashop%2Fleo_matico_demo%2Fen%2Fbeauty-and-health%2F2-brown-bear-printed-sweater.html"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"
                                                        alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img
                                                        src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product->title }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span>Product House : <a href="{{url('shop_details',$product->shop_slug)}}">{{ $product->shop }}</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> ({{ $total_review }}
                                                    reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span class="text-brand">${{ $product->sale_price }}</span></ins>
                                                <ins><span
                                                        class="old-price font-md ml-15">${{ $product->regular_price }}</span></ins>
                                                <span class="save-price  font-md color3 ml-15">{{$product->sale_percent}} Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i>{{ $product->warranty }}
                                                </li>
                                                <li class="mb-10"><i
                                                        class="fi-rs-refresh mr-5"></i>{{ $product->return }}
                                                </li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div>

                                        <form action="{{ url('add_cart', $product->id) }}" method="POST">@csrf
                                            <div class="color-selector">
                                                <label for="colors">Select Colors:</label>
                                                <select id="colors" name="color">
                                                  <option value="{{$product->color1}}">{{$product->color1}}</option>
                                                  <option value="{{$product->color2}}">{{$product->color2}}</option>
                                                  <option value="{{$product->color3}}">{{$product->color3}}</option>
                                                  <option value="{{$product->color4}}">{{$product->color4}}</option>
                                                  <option value="{{$product->color5}}">{{$product->color5}}</option>
                                               
                                                </select>
                                              </div>
                                          
                                        
                                            <div class="size-selector mt-1">
                                                <label for="colors">Size:</label>
                                                 
                                                <input type="radio" id="size-s" name="size" value="{{$product->size1}}" class="hidden">
                                                <label for="size-s" class="size-label">{{$product->size1}}</label>
                                              
                                                <input type="radio" id="size-m" name="size" value="{{$product->size2}}" class="hidden">
                                                <label for="size-m" class="size-label">{{$product->size2}}</label>
                                            
                                              
                                                <input type="radio" id="size-xl" name="size" value="{{$product->size3}}" class="hidden">
                                                <label for="size-xl" class="size-label">{{$product->size3}}</label>
                                              
                                                <input type="radio" id="size-xxl" name="size" value="{{$product->size4}}" class="hidden">
                                                <label for="size-xxl" class="size-label">{{$product->size4}}</label>
                                              
                                                <input type="radio" id="size-xxl" name="size" value="{{$product->size5}}" class="hidden">
                                                <label for="size-xxl" class="size-label">{{$product->size5}}</label>
                                              </div>

                                              <div class="cart-quantity">
                                                <h5  class="mr-10">পরিমাণ</h5></h5>
                                                <span class="cart-btn" onclick="decrement()">-</span>
                                                <input type="number" class="cart-input" name="quantity" value="1" min="1">
                                                <span class="cart-btn" onclick="increment()">+</span>
                                              </div>

                                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                            <div class="detail-extralink">
                                                
                                                <div class="product-extra-link2">
                                                    <button type="submit" class="button ">Add to cart</button>

            
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="product-meta font-xs color-grey mt-50">
                                            <li class="mb-5">SKU: <a href="#">{{ $product->SKU }}</a></li>
                                            <li>Availability:<span
                                                    class="in-stock text-success ml-5">{{ $product->stock_status }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            {{-- review --}}
                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                                <div class="wrap-product-detail">
                                    <div class="advance-info">
                                        <div class="tab-control normal">
                                            <a href="#description" class="tab-control-item active">Ask-Question-&-Ans</a>
                                            <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                                            <a href="#review" class="tab-control-item">Reviews</a>
                                        </div>
                               
                                        <div class="tab-contents">
                                            <div class="tab-content-item active" id="description">
                                                <div class="wrap-review-form">
                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">
                                                
                                                                <form action="{{url('add_comment',$product->id) }}" method="post" id="commentform" class="comment-form"
                                                                    novalidate="">@csrf
                                                
                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Question <span class="required">*</span>
                                                                        </label>
                                                                        <textarea id="comment" name="comment" cols="30" rows="3"></textarea>
                                                                    </p>
                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                    </p>
                                                                </form>
                                                
                                                                {{-- <form action="{{ route('add_comment') }}" method="POST">@csrf
                                                                  <textarea placeholder="commets here"name="comment"style="height:150px; width:150px;"></textarea><br>
                                                                  <input type="submit" class="btn btn-primary" value="Comment">
                                                              </form> --}}
                                                
                                                            </div><!-- .comment-respond-->
                                                        </div><!-- #review_form -->
                                                    </div><!-- #review_form_wrapper -->
                                                
                                                    <div id="comments">
                                                        <ol class="commentlist">
                                                            @foreach ($comment as $comment)
                                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                                    id="li-comment-20">
                                                                    <div id="comment-20" class="comment_container">

                                                                        {{-- <img class="w-full "
                                                                        src="{{asset('assets/images/profile/Dummy Profile Picture.png')}}"
                                                                        alt="image"> --}}

                                                                        <div class="comment-text">
                                                                         
                                                                            <p class="meta">
                                                                                <strong
                                                                                    class="woocommerce-review__author">Q:{{ $comment->name }}</strong>
                                                                                <span
                                                                                    class="woocommerce-review__dash">–</span>
                                                                                <time
                                                                                    class="woocommerce-review__published-date"
                                                                                    datetime="2008-02-14 20:00">{{ $comment->created_at }}
                                                                                </time>
                                                                            </p>
                                                                            <div class="description">
                                                                                <p>{{ $comment->comment }}</p>
                                                                                <a href="javascript::void(0)" onclick="reply(this)" data-Comment_id="{{ $comment->id }}">Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                                <li>
                                                                    
                                                        @foreach ($reply as $replys)
                                                        @if ($replys->comment_id == $comment->id)
                                                        <li style="padding-left:3%; padding-bottom:10px" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                            id="li-comment-20">
                                                            <div id="comment-20" class="comment_container">

                                                                {{-- <img class="w-full "
                                                                    src="{{asset('assets/images/profile/profile.png')}}"
                                                                    alt="image">" --}}

                                                                <div class="comment-text">
                                                                 
                                                                    <p class="meta">
                                                                        <strong
                                                                            class="woocommerce-review__author">A:{{ $replys->name }}</strong>
                                                                        <span
                                                                            class="woocommerce-review__dash">–</span>
                                                                        <time
                                                                            class="woocommerce-review__published-date"
                                                                            datetime="2008-02-14 20:00">{{ $replys->created_at }}
                                                                        </time>
                                                                    </p>
                                                                    <div class="description">
                                                                        <p>{{ $replys->reply }}</p>
                                                                        <a href="javascript::void(0)" onclick="reply(this)"
                                                                        data-Comment_id="{{ $comment->id }}">Reply</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endif
                                                        @endforeach

                                                        <div style="display:none;" class="replyDiv">
                                                            <form action="{{url('add_reply',$product->id)}}" method="POST">@csrf
                                                                <input type="text" id="commentId" name="commentId" hidden>
                                                                <textarea placeholder="write somthing here" name="reply" class="height:100px; width:500px"></textarea><br>
                                                
                                                                {{-- <input type="submit" value="reply" class="btn btn-primary"> --}}
                                                                <button type="submit" class="btn btn-warning">Reply</button>
                                                
                                                                <a href="javascript::void(0)" class="btn" onclick="reply_close(this)">Close</a>
                                                            </form>
                                                
                                                        </div>
                                                                </li>
                                                      
                                                        </ol>

                                                        <div>
                                                            
                                                        </div>



                                                        @endforeach

                                                    </div><!-- #comments -->
                                                
                                           


     




                                                </div>
                                            </div>


                                            {{-- add_information --}}
                                            <div class="tab-content-item " id="add_infomation">
                                                <table class="shop_attributes">

                                                    <p>{{$product->description}}</p>
                                                    <tbody>
                                                        <tr>
                                                            <th>Brand</th>
                                                            <td class="product_weight">{{$product->featured}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Product Authentic</th>
                                                            <td class="product_weight">{{$product->authentic}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{$product->topic1}}</th>
                                                            <td class="product_weight">{{$product->topic_details1}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{$product->topic2}}</th>
                                                            <td class="product_weight">{{$product->topic_details2}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{$product->topic3}}</th>
                                                            <td class="product_weight">{{$product->topic_details3}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{$product->topic4}}</th>
                                                            <td class="product_weight">{{$product->topic_details4}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>{{$product->topic5}}</th>
                                                            <td class="product_weight">{{$product->topic_details5}}</td>
                                                        </tr>
                                                      
                                                            <th>Color</th>
                                                            <td>
                                                                <p>{{$product->color1}}, {{$product->color2}},{{$product->color3}},{{$product->color4}},{{$product->color5}}</p>
                                                            </td>

                                                           
                                                        </tr>

                                                        </tr>
                                                      
                                                            <th>Product size Details</th>
                                                            <td>
                                                                <b>{{$product->size1}}={{$product->size_details1}}</b><br>
                                                                <b>{{$product->size2}}={{$product->size_details2}}</b><br>
                                                                <b>{{$product->size3}}={{$product->size_details3}}</b><br>
                                                                <b>{{$product->size4}}={{$product->size_details4}}</b><br>
                                                                <b>{{$product->size5}}={{$product->size_details5}}</b><br>
                                                             
                                                            </td>

                                                           
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>


                                             

                                            
                                            <div class="tab-content-item " id="review">

                                                <div class="wrap-review-form">

                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div id="respond" class="comment-respond">

                                                                <form action="{{ url('add_review', $product->id) }}"
                                                                    method="post" id="commentform" class="comment-form"
                                                                    novalidate="">@csrf
                                                                    <div class="comment-form-rating">
                                                                        <span>Your rating</span>
                                                                        <p class="stars">

                                                                            <label for="rated-1"></label>
                                                                            <input type="radio" id="rated-1"
                                                                                name="rating" value="1">
                                                                            <label for="rated-2"></label>
                                                                            <input type="radio" id="rated-2"
                                                                                name="rating" value="2">
                                                                            <label for="rated-3"></label>
                                                                            <input type="radio" id="rated-3"
                                                                                name="rating" value="3">
                                                                            <label for="rated-4"></label>
                                                                            <input type="radio" id="rated-4"
                                                                                name="rating" value="4">
                                                                            <label for="rated-5"></label>
                                                                            <input type="radio" id="rated-5"
                                                                                name="rating" value="5"
                                                                                checked="checked">
                                                                        </p>
                                                                    </div>

                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your review <span
                                                                                class="required">*</span>
                                                                        </label>
                                                                        <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                                    </p>

                                                                


                                                                    <p class="form-submit">
                                                                        <input name="submit" type="submit"
                                                                            id="submit" class="submit" value="Submit">
                                                                    </p>
                                                                </form>

                                                            </div><!-- .comment-respond-->
                                                        </div><!-- #review_form -->
                                                    </div><!-- #review_form_wrapper -->

                                                    <div id="comments">
                                                        <ol class="commentlist">
                                                            @foreach ($reviews as $review)
                                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                                    id="li-comment-20">
                                                                    <div id="comment-20" class="comment_container">

                                                                        <img class="w-full "
                                                                        src="{{asset('assets/images/profile/profile.png')}}"
                                                                        alt="image">"

                                                                        <div class="comment-text">
                                                                            <div class="star-rating">
                                                                                <span class="width-80-percent">Rated
                                                                                    <strong class="rating">5</strong>
                                                                                </span>
                                                                            </div>
                                                                            <p class="meta">
                                                                                <strong
                                                                                    class="woocommerce-review__author">{{ $review->name }}</strong>
                                                                                <span
                                                                                    class="woocommerce-review__dash">–</span>
                                                                                <time
                                                                                    class="woocommerce-review__published-date"
                                                                                    datetime="2008-02-14 20:00">{{ $review->created_at }}
                                                                                </time>
                                                                            </p>
                                                                            <div class="description">
                                                                                <p>{{ $review->comment }}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    </div><!-- #comments -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end main products area-->
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                @foreach ($categories as $category )
                       
                                <li><a href="{{route('categories.product',$category->category)}}">{{{$category->category}}}</a></li>     
                                @endforeach
                           
                            </ul>
                        </div>

                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Related products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>

                            @foreach ($rproducts as $rproducts)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="storage/product/{{ $rproducts->image }}" alt="#">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a
                                                href="{{ url('product_details', $rproducts->slug) }}">{{ $rproducts->product }}</a>
                                        </h5>
                                        <p class="price mb-0 mt-5">{{ $product->sale_price }}</p>
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



    <script type="text/javascript">
        function reply(caller) {

            document.getElementById('commentId').value = $(caller).attr('data-Comment_id');
            $('.replyDiv').insertAfter($(caller));
            $('.replyDiv').show();
        }

        function reply_close(caller) {

            $('.replyDiv').hide();
        }
    </script>
@endsection
