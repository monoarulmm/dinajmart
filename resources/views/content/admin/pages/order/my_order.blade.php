@section('title', 'order_list')
<base href="/public">
@extends('layouts.base')
@section('content')


    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Orders
                            <small>Dinajmart Vendor panel</small>    
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Sales</li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body order-datatable">
                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="table all-package" id="editableTable">
                                    <thead>
                                        <tr>
                                            <th>Order Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Adress</th>
                                            <th>phone</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Payment status</th>
                                            <th>Delivery status</th>
                                            <th>Image</th>
                                            <th>Deliver</th>
                                            <th>Print Pdf</th>
                                            <th>SendEmail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>

                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>{{ $order->address }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->product }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td>{{ $order->price }}</td>
                                                <td><span class="badge badge-success">{{ $order->payment_status }}</span>
                                                </td>



                                                <td><span class="badge badge-primary">{{ $order->delivery_status }}</span>
                                                </td>

                                                <td>
                                                  
                                                        <img src="storage/product/{{$order->image}}"alt="product"
                                                            class="img-fluid img-30 me-2 blur-up lazyloaded">
                                                     
                                                </td>

                                                <td>

                                                    @if ($order->delivery_status == 'processing')
                                                        <a onclick="return confirm('Are Your this product ready')"
                                                            class="btn btn-air-secondary"
                                                            href="{{ url('processed', $order->id) }}">Processed</a>
                                                    @else
                                                        <a onclick="return confirm('Are Your this product delivered')"
                                                            class="btn btn-air-success"
                                                            href="{{ url('delivered', $order->id) }}">delivered</a>
                                                    @endif

                                                </td>

                                                <td>
                                                    <a href="{{ url('print_pdf', $order->id) }}"
                                                        class="btn btn-air-info">Print Pdf</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('send_email', $order->id) }}"
                                                        class="btn btn-primary">Send Email</a>
                                                </td>
                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
