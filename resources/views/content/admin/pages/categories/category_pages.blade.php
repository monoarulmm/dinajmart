@section('title', 'category_pages')

@extends('layouts.base')
@section('content')




    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3 style="font-family: 'Baloo Da 2', cursive;
                        " >ক্যাটাগরি
                            <small style="color:blueviolet;">আপনি যে ধরনের পন্য যোগ করতে চাচ্ছেন সেই ক্যাটাগরি সার্চ করুন ,না পাওয়া গেলে নতুন ক্যাটাগরি যোগ করুন</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}">
                                <i data-feather="home"></i>
                            </a>
                        </li>
                        {{-- <li class="breadcrumb-item">{{$user->name}}</li> --}}
                        <li class="breadcrumb-item active">Category</li>
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
                        <form class="form-inline search-form search-box" action="{{route('category.search')}}" method="get">@csrf
                            <div class="form-group">
                                <input class="form-control-plaintext" name="search" type="search" placeholder="Search..">
                            </div>
                        </form>

                        <button type="button" class="btn btn-primary mt-md-0 mt-2" data-bs-toggle="modal" style="font-family: 'Baloo Da 2', cursive;
                            data-original-title="test" data-bs-target="#exampleModal"> নতুন ক্যাটাগরি যোগ
                            </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table all-package table-category " id="editableTable">
                                <thead>
                                    <tr>


                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Option</th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse ($categories as $category)
                                        <tr>

                                            <td data-field="name">{{$category->category}}</td>
                                            <td>
                                                <img  src="/storage/category/{{ $category->image }}" alt="category"
                                                    data-field="image" alt="">
                                            </td>

                                            <td>
                                                <a href="{{ url('update_category', $category->id) }}">
                                                    <i class="fa fa-edit" title="Edit"></i>
                                                </a>

                                                <a href="{{ url('delete_category', $category->id) }}" >
                                                    <i class="fa fa-trash" title="Delete"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        @empty
                                            <div>not found</div>
                                       
                                    @endforelse

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
                     Category</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ url('add_category') }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="modal-body">

                        <div class="form">
                            <div class="form-group">
                                <label for="validationCustom01" class="mb-1">Category Name :(English)</label>
                                <input class="form-control" id="validationCustom01" type="text" name="category">
                            </div>
                            <div class="form-group mb-0">
                                <label for="validationCustom02" class="mb-1">Category Image :</label>
                                <input class="form-control" id="validationCustom02" type="file" name="image">
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
