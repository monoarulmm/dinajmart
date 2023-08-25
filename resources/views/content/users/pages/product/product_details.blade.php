<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Surfside Media</title>
    <base href="/public">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.ico">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    
    <style>
        @import url('https://fonts.maateen.me/adorsho-lipi/font.css');
        @import url('https://fonts.maateen.me/bangla/font.css');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;700;800&display=swap');



        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span {
            /* font-family: 'AdorshoLipi', sans-serif; */
            font-family: 'Baloo Da 2', cursive;

        }

        /* color */
        .color-selector {
            max-width: 400px;
            margin-bottom: 10px;
            padding: 2px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #fff;
            box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
            outline: none;
            font-size: 16px;
            color: #333;
        }

        select[multiple] {
            height: auto;
        }


        /* Custom styling for the size selector container */
        .size-selector {
            display: flex;
            gap: 10px;
        }

        /* Hide the default radio buttons */
        .hidden {
            display: none;
        }

        /* Style the size labels */
        .size-label {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border: 2px solid #333;
            border-radius: 5%;
            cursor: pointer;
            font-size: 16px;
        }

        /* Style the size labels when selected */
        .hidden:checked+.size-label {
            background-color: #e35252;
            color: #fff;
        }


        /* cart */
        /* Custom styling for the cart quantity container */
        .cart-quantity {
            display: flex;
            align-items: center;
        }

        /* Style the increment and decrement buttons */
        .cart-btn {
            padding: 8px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            background-color: #333;
            color: #fff;
        }

        /* Style the input element */
        .cart-input {
            padding: 8px 12px;
            font-size: 16px;
            border: 2px solid #333;
            border-radius: 4px;
            width: 50px;
            text-align: center;
            appearance: textfield;
            /* To disable the default spinner arrows in some browsers */
        }
    </style>
</head>

<body>
  
    @include('sections.9_header')



    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span> Abstract Print Patchwork Dress
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
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
                                            <div><img src="storage/product/{{ $product->image }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->images }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->img }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->image }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->images }}" alt="product image">
                                            </div>

                                            <div><img src="storage/product/{{ $product->img }}" alt="product image">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Gallery -->
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook"><a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-facebook.svg"
                                                        alt=""></a></li>
                                            <li class="social-twitter"> <a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-twitter.svg"
                                                        alt=""></a></li>
                                            <li class="social-instagram"><a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-instagram.svg"
                                                        alt=""></a></li>
                                            <li class="social-linkedin"><a href="#"><img
                                                        src="assets/imgs/theme/icons/icon-pinterest.svg"
                                                        alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product->title }}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span>Product House : <a
                                                        href="{{ url('shop_details', $product->shop_slug) }}">{{ $product->shop }}</a></span>
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
                                                <span
                                                    class="save-price  font-md color3 ml-15">{{ $product->sale_percent }}
                                                    Off</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i
                                                        class="fi-rs-crown mr-5"></i>{{ $product->warranty }}
                                                </li>
                                                <li class="mb-10"><i
                                                        class="fi-rs-refresh mr-5"></i>{{ $product->return }}
                                                </li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available
                                                </li>
                                            </ul>
                                        </div>

                                        <form action="{{ url('add_cart', $product->id) }}" method="POST">@csrf
                                            <div class="color-selector">
                                                <label for="colors">Select Colors:</label>
                                                <select id="colors" name="color">
                                                    <option value="{{ $product->color1 }}">{{ $product->color1 }}
                                                    </option>
                                                    <option value="{{ $product->color2 }}">{{ $product->color2 }}
                                                    </option>
                                                    <option value="{{ $product->color3 }}">{{ $product->color3 }}
                                                    </option>
                                                    <option value="{{ $product->color4 }}">{{ $product->color4 }}
                                                    </option>
                                                    <option value="{{ $product->color5 }}">{{ $product->color5 }}
                                                    </option>

                                                </select>
                                            </div>


                                            <div class="size-selector mt-1">
                                                <label for="colors">Size:</label>

                                                <input type="radio" id="size-s" name="size"
                                                    value="{{ $product->size1 }}" class="hidden">
                                                <label for="size-s"
                                                    class="size-label">{{ $product->size1 }}</label>

                                                <input type="radio" id="size-m" name="size"
                                                    value="{{ $product->size2 }}" class="hidden">
                                                <label for="size-m"
                                                    class="size-label">{{ $product->size2 }}</label>


                                                <input type="radio" id="size-xl" name="size"
                                                    value="{{ $product->size3 }}" class="hidden">
                                                <label for="size-xl"
                                                    class="size-label">{{ $product->size3 }}</label>

                                                <input type="radio" id="size-xxl" name="size"
                                                    value="{{ $product->size4 }}" class="hidden">
                                                <label for="size-xxl"
                                                    class="size-label">{{ $product->size4 }}</label>

                                                <input type="radio" id="size-xxl" name="size"
                                                    value="{{ $product->size5 }}" class="hidden">
                                                <label for="size-xxl"
                                                    class="size-label">{{ $product->size5 }}</label>
                                            </div>

                                            <div class="cart-quantity">
                                                <h5 class="mr-10">পরিমাণ</h5>
                                                </h5>
                                                <span class="cart-btn" onclick="decrement()">-</span>
                                                <input type="number" class="cart-input" name="quantity"
                                                    value="1" min="1">
                                                <span class="cart-btn" onclick="increment()">+</span>
                                            </div>

                                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                            <div class="detail-extralink">

                                                <div class="product-extra-link2">
                                                    <button type="submit" class="button ">Add to cart</button>


                                                    <form id="myForm" action="{{url('add_wishlist',$product->id)}}" method="POST">@csrf
                                                        <a aria-label="Add To Wishlist" class="action-btn hover-up" href="javascript:void(0);" onclick="submitForm();" ><i class="fi-rs-heart"></i></a>
                                                    </form>
                                               
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="compare.php"><i class="fi-rs-shuffle"></i></a>


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
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                            href="#Description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                            href="#Additional-info">Additional info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab"
                                            href="#Reviews">Reviews (3)</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">
                                    <div class="tab-pane fade show active" id="Description">
                                        <div class="">
                                            <p>Uninhibited carnally hired played in whimpered dear gorilla koala
                                                depending and much yikes off far quetzal goodness and from for grimaced
                                                goodness unaccountably and meadowlark near unblushingly crucial scallop
                                                tightly neurotic hungrily some and dear furiously this apart.</p>
                                            <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much
                                                hello on spoon-fed that alas rethought much decently richly and wow
                                                against the frequent fluidly at formidable acceptably flapped
                                                besides and much circa far over the bucolically hey precarious goldfinch
                                                mastodon goodness gnashed a jellyfish and one however because.
                                            </p>
                                            <ul class="product-more-infor mt-30">
                                                <li><span>Type Of Packing</span> Bottle</li>
                                                <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                                <li><span>Quantity Per Case</span> 100ml</li>
                                                <li><span>Ethyl Alcohol</span> 70%</li>
                                                <li><span>Piece In One</span> Carton</li>
                                            </ul>
                                            <hr class="wp-block-separator is-style-dots">
                                            <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey
                                                hello far meadowlark imitatively egregiously hugged that yikes minimally
                                                unanimous pouted flirtatiously as beaver beheld above forward
                                                energetic across this jeepers beneficently cockily less a the raucously
                                                that magic upheld far so the this where crud then below after jeez
                                                enchanting drunkenly more much wow callously irrespective limpet.</p>
                                            <h4 class="mt-30">Packaging & Delivery</h4>
                                            <hr class="wp-block-separator is-style-wide">
                                            <p>Less lion goodness that euphemistically robin expeditiously bluebird
                                                smugly scratched far while thus cackled sheepishly rigid after due one
                                                assenting regarding censorious while occasional or this more crane
                                                went more as this less much amid overhung anathematic because much held
                                                one exuberantly sheep goodness so where rat wry well concomitantly.
                                            </p>
                                            <p>Scallop or far crud plain remarkably far by thus far iguana lewd
                                                precociously and and less rattlesnake contrary caustic wow this near
                                                alas and next and pled the yikes articulate about as less cackled
                                                dalmatian
                                                in much less well jeering for the thanks blindly sentimental whimpered
                                                less across objectively fanciful grimaced wildly some wow and rose
                                                jeepers outgrew lugubrious luridly irrationally attractively
                                                dachshund.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Additional-info">
                                        <table class="font-md">
                                            <tbody>
                                                <tr class="stand-up">
                                                    <th>Stand Up</th>
                                                    <td>
                                                        <p>35″L x 24″W x 37-45″H(front to back wheel)</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-wo-wheels">
                                                    <th>Folded (w/o wheels)</th>
                                                    <td>
                                                        <p>32.5″L x 18.5″W x 16.5″H</p>
                                                    </td>
                                                </tr>
                                                <tr class="folded-w-wheels">
                                                    <th>Folded (w/ wheels)</th>
                                                    <td>
                                                        <p>32.5″L x 24″W x 18.5″H</p>
                                                    </td>
                                                </tr>
                                                <tr class="door-pass-through">
                                                    <th>Door Pass Through</th>
                                                    <td>
                                                        <p>24</p>
                                                    </td>
                                                </tr>
                                                <tr class="frame">
                                                    <th>Frame</th>
                                                    <td>
                                                        <p>Aluminum</p>
                                                    </td>
                                                </tr>
                                                <tr class="weight-wo-wheels">
                                                    <th>Weight (w/o wheels)</th>
                                                    <td>
                                                        <p>20 LBS</p>
                                                    </td>
                                                </tr>
                                                <tr class="weight-capacity">
                                                    <th>Weight Capacity</th>
                                                    <td>
                                                        <p>60 LBS</p>
                                                    </td>
                                                </tr>
                                                <tr class="width">
                                                    <th>Width</th>
                                                    <td>
                                                        <p>24″</p>
                                                    </td>
                                                </tr>
                                                <tr class="handle-height-ground-to-handle">
                                                    <th>Handle height (ground to handle)</th>
                                                    <td>
                                                        <p>37-45″</p>
                                                    </td>
                                                </tr>
                                                <tr class="wheels">
                                                    <th>Wheels</th>
                                                    <td>
                                                        <p>12″ air / wide track slick tread</p>
                                                    </td>
                                                </tr>
                                                <tr class="seat-back-height">
                                                    <th>Seat back height</th>
                                                    <td>
                                                        <p>21.5″</p>
                                                    </td>
                                                </tr>
                                                <tr class="head-room-inside-canopy">
                                                    <th>Head room (inside canopy)</th>
                                                    <td>
                                                        <p>25″</p>
                                                    </td>
                                                </tr>
                                                <tr class="pa_color">
                                                    <th>Color</th>
                                                    <td>
                                                        <p>Black, Blue, Red, White</p>
                                                    </td>
                                                </tr>
                                                <tr class="pa_size">
                                                    <th>Size</th>
                                                    <td>
                                                        <p>M, S</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="Reviews">
                                        <div class="comment-form">
                                            <h4>Add a review</h4>
                            
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12">
                                                    <form action="{{ url('add_review', $product->id) }}"
                                                        method="post" id="commentform" class="comment-form"
                                                        novalidate="">@csrf
                                                        <div class="comment-form-rating">
                                                            <span>Your rating</span>
                                                            <h1 class="stars">

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
                                                            <h1/>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" name="comment"
                                                                placeholder="Write Comment"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" 
                                                                class="button button-contactForm">Submit
                                                                Review</button>
                                                        </div>
                                                      
                                                    </form>




                                                </div>
                                            </div>
                                        </div>
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer Reviews </h4>

                                                    @foreach ($reviews as $review )
                                                    <div class="comment-list">
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{asset('assets/images/profile/profile.png')}}"
                                                                        alt="">
                                                                    <h6><a href="#">{{$review->name}}</a></h6>
                                                        
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:90%">
                                                                        </div>
                                                                    </div>
                                                                    <p>{{$review->comment}}</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">{{$review->created_at}}</p>
                                                                      
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                  
                                                    </div>
                                                    @endforeach
                                                   
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4 class="mb-30">Customer reviews</h4>
                                                    <div class="d-flex mb-30">
                                                        <div class="product-rate d-inline-block mr-15">
                                                            <div class="product-rating" style="width:90%">
                                                            </div>
                                                        </div>
                                                        <h6>4.8 out of 5</h6>
                                                    </div>
                                                    <div class="progress">
                                                        <span>5 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100">50%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>4 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">25%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>3 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 45%;" aria-valuenow="45" aria-valuemin="0"
                                                            aria-valuemax="100">45%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>2 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100">65%</div>
                                                    </div>
                                                    <div class="progress mb-30">
                                                        <span>1 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                                            aria-valuemax="100">85%</div>
                                                    </div>
                                                    <a href="#" class="font-xs text-muted">How are ratings
                                                        calculated?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--comment form-->
                                        
                                        

                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        @foreach ($rproducts as $rproduct)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                 
                                            
                           <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{url('product_details',$rproduct->slug)}}">
                                        <img class="default-img" src="storage/product/{{$rproduct->image}}" alt="">
                                        <img class="hover-img"  src="storage/product/{{$rproduct->images}}" alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"   href="{{url('product_details',$rproduct->slug)}}">
                                        <i class="fi-rs-eye"></i></a>

                                    <a aria-label="All-Store" class="action-btn small hover-up" href="{{url('user/shop')}}" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                    

                                    <form id="myForm" action="{{url('add_wishlist',$rproduct->id)}}" method="POST">@csrf
                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="javascript:void(0);" onclick="submitForm();" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    </form>
             

                                  
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">{{$rproduct->sale_percent}}</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="{{url('shop_details',$rproduct->shop_slug)}}">{{ $rproduct->shop}}</a>
                                </div>
                                <h2><a href="{{url('product_details',$rproduct->slug)}}">{{$rproduct->product}}</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>৳{{$rproduct->sale_price}} </span>
                                    <span class="old-price">৳{{$rproduct->regular_price}}</span>
                                </div>
                            </div>
                        </div>
                                        </div>
                                        @endforeach
                                     
                                    
                                    </div>
                                </div>
                            </div>
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
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Store</h5>
                            <ul class="categories">
                                @foreach ($shops as $shop )
                       
                                <li><a href="{{url('shop_details',$shop->slug)}}">{{{$shop->shop}}}</a></li>     
                                @endforeach
                            </ul>
                        </div>
                  
                        
                        <!-- Product sidebar Widget -->
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
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


    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="assets/js/plugins/jquery.elevatezoom.js"></script>
    <!-- Template  JS -->
    <script src="assets/js/main.js?v=3.3"></script>
    <script src="assets/js/shop.js?v=3.3"></script>
    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="assets/js/plugins/jquery.theia.sticky.js"></script>
    <script src="assets/js/plugins/jquery.elevatezoom.js"></script>
    <script src="assets/js/main.js?v=3.3"></script>
    <script src="assets/js/shop.js?v=3.3"></script> -->
    <script>
        function increment() {
            const input = document.querySelector('.cart-input');
            input.stepUp();
        }

        function decrement() {
            const input = document.querySelector('.cart-input');
            input.stepDown();
        }
    </script>

    <script>
        document.getElementById("submitButton").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior (e.g., navigating to "#")

            // Get the form element
            var form = document.getElementById("myForm");

            // Perform any validation or other tasks here if needed
            // ...

            // Submit the form programmatically
            form.submit();
        });


        // গািকত
    </script>

    <script>
        function submitForm() {
            document.getElementById("myForm").submit();
        }
        const searchButton = document.getElementById('searchButton');
        const searchBar = document.getElementById('searchBar');

        searchButton.addEventListener('click', () => {
            searchBar.classList.toggle('hidden');
            searchBar.classList.toggle('active');
        });
    </script>

</body>

</html>
