@section('title', 'show_cart')
<base href="/public">
@extends('layouts.main')
@section('content')

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table shopping-summery text-center clean">
                                <thead>
                                    <tr class="main-heading">
                                        <th>Image</th>
                                        <th>Product Title</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total Price</th>
                                        <th>Payment Status</th>
                                        <th>Delivery Status</th>
                                        <th>Order Cancel/Delivered</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td data-title="image" class="image product-thumbnail"><img src="storage/product/{{$order->image}}"
                                                    alt="#"></td>  
                                            <td class="price" data-title="Product">
                                                <h5 class="product-name"><a href="{{url('product_details',$order->product_slug)}}">{{$order->product}}
                                                        </a></h5>
                                            </td>
                                            <td class="price" data-title="quantity"><span>{{$order->quantity}}</span></td>
                                            <td class="price" data-title="price"><span>{{$order->price}}</span></td>
                                            <td class="price" data-title="price"><span>{{$order->subtotal}}</span></td>
                                            <td class="price" data-title="payment_status"><span>{{$order->payment_status}} </span></td>
                                            <td class="price" data-title="Delivary_status"><span>{{$order->delivery_status}}</span></td>
                                  
                                            @if($order->delivery_status == 'processing')
                                            <td class="action" data-title="Cancel_Order"><a href="{{url('cancel_order',$order->id)}}"
                                                class="text-muted"><i class="fi-rs-trash"></i></a></td>

                                      
                                            @else
                                            <td>
                                                <a href="{{url('print_pdf',$order->id)}}" class="btn-redirect">Print Pdf</a>
                                              </td>
                                      
                                            @endif
                                        

                                                   
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
