@section('title', 'show_cart')
<base href="/public">

@extends('layouts.main')
@section('content')
    @include('sections.9_header')
    @include('sections.header')

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
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

                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $totalprice = 0; ?>
                                    @foreach ($carts as $cart)
                                        <tr>
                                            <td class="image product-thumbnail"><img
                                                    src="storage/product/{{ $cart->image }}" alt="#"></td>
                                            <td class="product-des product-name">
                                                <h5 class="product-name"><a
                                                        href="{{ url('product_details', $cart->product_slug) }}">{{ $cart->product }}</a>
                                                </h5>
                                                <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy
                                                    magndapibus.
                                                </p>
                                            </td>
                                            <td class="price" data-title="Price"><span>{{ $cart->price }}</span></td>
                                            <td class="text-center" data-title="Stock">
                                                <div class="detail-qty border radius  m-auto">
                                                    {{-- <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a> --}}
                                                    <span class="qty-val">{{ $cart->quantity }}</span>
                                                    {{-- <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a> --}}
                                                </div>
                                            </td>
                                            <td class="text-right" data-title="Cart">
                                                <span>${{ $cart->subtotal }} </span>
                                            </td>
                                            <td class="action" data-title="Remove"><a
                                                    href="{{ url('delete_cart', $cart->id) }}" class="text-muted"><i
                                                        class="fi-rs-trash"></i></a></td>
                                        </tr>

                                        <?php $totalprice = $totalprice + $cart->subtotal; ?>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                        <div class="cart-action text-end">
                            <a href="{{ url('show_order') }}" class="btn "><i class="fi-rs-shopping-bag mr-10"></i>My
                                Order</a>
                            <a href="{{ url('user/product') }}" class="btn "><i
                                    class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                        </div>


                        <div class="row mb-50">

                            <form id="myForm" action="{{ url('cash_order') }}" method="get">@csrf
                                <div class="col-md-6">
                                    <div class="mb-25">
                                        <h4>Billing Details</h4>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <input type="text" required="" name="fname"
                                                value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="billing_address" required=""
                                                value="{{ $user->address }}">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="text" name="phone"
                                                value="{{ $user->phone }}">
                                        </div>
                                        <div class="form-group">
                                            <input required="" type="text" name="email"
                                                value="{{ $user->email }}">
                                        </div>




                                        <div class="ship_detail">


                                            <div class="mb-20">
                                                <h5>Additional information</h5>
                                            </div>
                                            <div class="form-group mb-30">
                                                <textarea rows="5" placeholder="Order notes" name="note"></textarea>
                                                @error('note')
                                                    <div class="text-red-600">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>




                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="order_review">
                                        <div class="mb-20">
                                            <h4>Your Orders</h4>
                                        </div>
                                        <div class="table-responsive order_table text-center">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">Product</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($carts as $cart)
                                                        <tr>
                                                            <td class="image product-thumbnail"><img
                                                                    src="storage/product/{{ $cart->image }}"
                                                                    alt="#"></td>
                                                            <td>
                                                                <h5><a
                                                                        href="{{ url('product_details', $cart->product_slug) }}">{{ $cart->product }}<a>
                                                                            <h5>


                                                                                <span
                                                                                    class="product-qty">{{ $cart->price }}x{{ $cart->quantity }}</span>
                                                            </td>
                                                            <td>{{ $cart->subtotal }}</td>
                                                        </tr>
                                                    @endforeach



                                                    <tr>
                                                        <th>SubTotal</th>
                                                        <td class="product-subtotal" colspan="2">৳{{ $totalprice }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Shipping</th>
                                                        <td colspan="2"><em>Free Shipping</em></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td colspan="2" class="product-subtotal"><span
                                                                class="font-xl text-brand fw-900">৳{{ $totalprice }}</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="summary summary-checkout ">
                                            <div class="summary-item payment-method">
                                                {{-- <h4 class="title-box">Payment Method</h4> --}}
                                                <div class="choose-payment-methods">
                                                    <label class="payment-method">
                                                        <input name="without_dinajpur" id="payment-method-bank" value="without_dinajpur" type="radio" required="">
                                                        <span>দিনাজপুরের বাইরে</span>
                                                        <div class="form-group payment-desc">
                                                            <input required="" type="text" name="diff_address" placeholder="Quriar Name">
                                                        </div>
                                                        <div class="form-group payment-desc">
                                                            <input required="" type="text" name="courier" placeholder="Quriar Address">
                                                        </div>
                                                        <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour,
                                                            or randomised words which don't look even slightly believable</span>

                                                            
{{-- 
                                                            <form action="{{route()}}" class="payment-desc">
                                                                <button type="submit" class="payment-desc">
                                                                    <img src="{{asset('assets/images/bkash.png')}}" alt="">
                                                                </button>
                                                            </form> --}}

                                                            <p class="summary-info grand-total payment-desc"><span>Grand Total</span> <span class="grand-total-price">$150.00</span></p>
                                                            
                                                            <a href="{{route('bkash-create-payment')}}"  class="btn btn-medium payment-desc">Payment</a>
                                              
                                                    </label>
                                                    <label class="payment-method">
                                                        <input name="without_dinajpur" id="payment-method-visa" value="within_dinajpur" type="radio" required="" >
                                                        <span>দিনাজপুরের মধ্যে</span>
                                                        <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                                                    </label>
                                             
                                                </div>
                                         
                                            </div>
                                        </div>

                                        <div class="payment_method">
                                                <div class="mb-25">
                                                    <h5>Payment</h5>
                                                </div>
                                                <div class="payment_option">
                                                    <div class="custome-radio">
                                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="case on delivery">
                                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">Cash On Delivery</label>                                        
                                                    </div>

                                                    <form action="{{url('/bkash/create-payment')}}">
                                                        <div class="custome-radio">
                                                            <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" value="Card Payment">

                                                            <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">Card Payment</label>                                        
                                                        </div>
                                                    </form>
                                                 
                                                    <div class="custome-radio">
                                                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" value="Paypal">
                                                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>                                        
                                                    </div>

                                                    @error('payment_option')
                                                    <div class="text-green-600">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>






                                        {{-- <a  href="javascript:$('form').submit();"  class="btn btn-fill-out btn-block mt-30">Place Order</a> --}}
                                        <a href="javascript:void(0);" onclick="submitForm();" class="btn btn-fill-out btn-block mt-30">Place Order<a>

                                    </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>



@endsection
