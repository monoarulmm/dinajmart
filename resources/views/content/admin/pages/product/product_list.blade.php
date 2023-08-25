 @section('title', 'product_pages')
 <base href="/public">
@extends('layouts.base')
@section('content')

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
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
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row products-admin ratio_asos">
            @foreach ($products as $product)
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="javascript:void(0)"><img src="storage/product/{{$product->img}}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                <div class="product-hover">
                                    <ul>
                                        <li>
                                            {{-- <button class="btn" type="button" data-original-title=""
                                                title=""><i class="fa fa-edit" title="Edit"></i></button> --}}
                                                <a href="{{ url('update_product', $product->id) }}">
                                                    <i class="fa fa-edit" title="Edit"></i>
                                                </a>
                                        </li>
                                        <li>
                                            {{-- <button class="btn"> <i class="fa fa-trash" title="Delete"></i></button> --}}
                                            <a href="{{ url('delete_product', $product->id) }}" >
                                                <i class="fa fa-trash" title="Delete"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i></div>
                            <a href="javascript:void(0)">
                                <h6>{{$product->product}}</h6>
                            </a>
                            <h4>{{$product->regular_price}} <del>{{$product->sale_price}}</del></h4>
                       
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
         
      
        </div>
    </div>
    <!-- Container-fluid Ends-->



@endsection 