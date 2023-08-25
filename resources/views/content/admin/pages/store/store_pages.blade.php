@section('title', 'store_pages')

@extends('layouts.base')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>store
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
                        <li class="breadcrumb-item">Digital</li>
                        <li class="breadcrumb-item active">store</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    @if (session()->has('message'))
        <div class="text-success">
            {{ session()->get('message') }}
        </div>
    @endif



    @if ($errors->any())
        <div class="text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <form class="form-inline search-form search-box">
                            {{-- <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search..">
                            </div> --}}
                        </form>

                        <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggle="modal"
                            data-original-title="test" data-bs-target="#exampleModal">Add
                            store</button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table all-package table-store " id="editableTable">
                                <thead>
                                    <tr>
                                        <th>Store Name</th>
                                        <th>Store Owner Name</th>
                                        <th>Image</th>
                                        <th>Store Location</th>
                                        <th>Option</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach ($shops as $shop)
                                        <tr>

                                            <td data-field="name">{{$shop->shop}}</td>
                                            <td><a href="{{route('vendor.dashboard',$shop->id)}}">Dashboard</a></td>
                                            <td>
                                                <img  src="/storage/shop/{{ $shop->image }}" alt="store"
                                                    data-field="image" alt="">
                                            </td>
                                            <td data-field="name">{{$shop->location}}</td>

                                            <td>
                                                <a href="{{ url('update_shop', $shop->id) }}">
                                                    <i class="fa fa-edit" title="Edit"></i>
                                                </a>

                                                <a href="{{ url('delete_shop', $shop->id) }}" >
                                                    <i class="fa fa-trash" title="Delete"></i>
                                                </a>
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
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add
                        Store </h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ url('add_shop') }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="modal-body">

                        <div class="form">
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Store Name :</label>
                                <input class="form-control" id="validationCustom01" type="text" name="shop">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Store Owner :</label>
                                <input class="form-control" id="validationCustom01" type="text" name="owner">
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Store Title :</label>
                                <input class="form-control" id="validationCustom01" type="text" name="title">
                            </div>
                            <div class="form-group mb-0">
                                <label for="validationCustom02" class="mb-1">Store Thumbail Image :</label>
                                <input class="form-control mb-1" id="validationCustom02" type="file" name="image">
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="mb-2 ">Store Details :</label>
                                 <textarea name="description" id="validationCustom01" cols="63" rows="6"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Store Location :</label>
                                <input class="form-control" id="validationCustom01" type="text" name="location">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-secondary" type="reset" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
