

@section('title', 'dashboard')
@extends('layouts.base')
<base href="/public">
@section('content')
     <!-- Container-fluid starts-->

     <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
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
                        <li class="breadcrumb-item active">Add Product</li>
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
        <form action="{{ url('add_product',$shop->id) }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row product-adding">
                            <div class="col-xl-5">
                                <div class="add-product">
                                    <div class="row">
                                        <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                            <img src="admin/assets/images/pro3/1.jpg" alt=""
                                                class="img-fluid image_zoom_1 blur-up lazyloaded">
                                        </div>
                                        <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                            <ul class="file-upload-product">
                                                <li>
                                                    <div class="box-input-file"><input class="upload" name="img"
                                                            type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                                <li>
                                                    <div class="box-input-file"><input class="upload" name="image"
                                                            type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                                <li>
                                                    <div class="box-input-file"><input class="upload" name="images"
                                                            type="file"><i class="fa fa-plus"></i></div>
                                                </li>
                                        
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <form class="needs-validation add-product-form" novalidate="">
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01"
                                                class="col-xl-3 col-sm-4 mb-0">Product Name :</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom01"
                                                    type="text" required="" name="product">
                                                    
                                             @error('product')
                                            <div class="text-denger">{{ $message }}</div>
                                             @enderror
                                            </div>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>

                                      
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02"
                                                class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input class="form-control" id="validationCustom02"
                                                    type="text" required="" name="title">
                                                               
                                             @error('title')
                                             <div class="text-denger">{{ $message }}</div>
                                              @enderror
                                            </div>
                                            <div class="valid-feedback">Looks good!</div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustomUsername"
                                                class="col-xl-3 col-sm-4 mb-0">Product Code :</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <input name="SKU" class="form-control" id="validationCustomUsername"
                                                    type="text" required="">
                                                    @error('SKU')
                                                    <div class="text-denger">{{ $message }}</div>
                                                     @enderror
                                            </div>
                                            <div class="invalid-feedback offset-sm-4 offset-xl-3">Please
                                                choose Valid Code.</div>

                                            
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1"
                                                class="col-xl-3 col-sm-4 mb-0"> Select Categories <span>*</span> :</label>
                                            <div class="col-xl-8 col-sm-7">
                                                <select name="category" class="form-control digits"
                                                    id="exampleFormControlSelect1">
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4 mb-0">Quantity :</label>
                                            <fieldset class="qty-box col-xl-9 col-xl-8 col-sm-7">
                                                <div class="input-group">
                                                    <input class="touchspin" type="text" value="1" name="quantity">
                                                    @error('quantity')
                                                    <div class="text-denger">{{ $message }}</div>
                                                     @enderror
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Add Description :</label>
                                            <div class="col-xl-8 col-sm-7 ">
                                                <textarea id="editor1d" name="description" cols="53" placeholder="Add description this product"
                                                    rows="12"></textarea>

                                                    @error('description')
                                                    <div class="text-denger">{{ $message }}</div>
                                                     @enderror
                                            </div>
                                            {{-- <div class="offset-xl-3 offset-sm-4 mt-4">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                                <button type="button" class="btn btn-light">Discard</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row product-adding">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>General</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Regular Price</label>
                                <input name="regular_price" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('regular_price')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustomtitle"
                                    class="col-form-label pt-0"><span>*</span>Discount Price</label>
                                <input class="form-control" id="validationCustomtitle" name="sale_price" type="text"
                                    required="">

                                               
                                    @error('sale_price')
                                    <div class="text-denger">{{ $message }}</div>
                                     @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label categories-basic"><span>*</span>
                                    Select Store</label>
                                <select class="custom-select form-control" required="" name="shop">
                                    <option value="">--Select--</option>
                                    @foreach ($shops as $shop)
                                    <option value="{{ $shop->shop }}">{{ $shop->shop }}</option>
                                    @endforeach  
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label categories-basic"><span>*</span>
                                    Store-Slug</label>
                                <select class="custom-select form-control" required="" name="shop_slug">
                                    <option value="">--Select--</option>
                                    @foreach ($shops as $shop)
                                    <option value="{{ $shop->slug }}">{{ $shop->slug}}</option>
                                    @endforeach 
                                </select>
                            </div>
                      
                            <div class="form-group">
                                <label for="validationCustom02" class="col-form-label"><span>*</span>
                                    Product Percentage Discount</label>
                                <input class="form-control" id="validationCustom02" type="text" required="" placeholder="10%" name="sale_percent">

                                @error('sale_percent')
                                <div class="text-denger">{{ $message }}</div>
                               @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label"><span>*</span> Status</label>
                                <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                    <label class="d-block" for="edo-ani">
                                        <input name="stock_status" class="radio_animated" id="edo-ani" type="radio" value="Out of Stock"
                                            name="rdo-ani">
                                        Out of Stock
                                    </label>
                                    <label class="d-block" for="edo-ani1">
                                        <input name="stock_status" class="radio_animated" id="edo-ani1" type="radio" value="available"
                                            name="rdo-ani">
                                        Available
                                    </label>
                                </div>

                                @error('stock_status')
                                <div class="text-denger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Brand</label>
                                <input name="featured" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('featured')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Warranty</label>
                                <input name="warranty" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('warranty')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Authentic</label>
                                <input name="authentic" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('authentic')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Return Days</label>
                                <input name="return" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('return')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                 Product Tag</label>
                                <input name="tag" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('tag')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                 Product Color 1</label>
                                <input name="color1" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('color1')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                 Product Color 2</label>
                                <input name="color2" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('color2')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                 Product Color3</label>
                                <input name="color3" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('color3')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                 Product color 4</label>
                                <input name="color4" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('color4')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                 Product color 5</label>
                                <input name="color5" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                @error('color5')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Product Size</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Product Size Shortcut 1
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="size1" placeholder="S">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Product Size Details 1</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""   name="size_details1" >
                            </div>
                         
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Product Size Shortcut 2
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="size2"  placeholder="M">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Product Size Details 2</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""   name="size_details2" >
                            </div>
                        
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Product Size Shortcut 3
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="size3"  placeholder="L">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Product Size Details 3</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""  name="size_details3" >
                            </div>
                       
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Product Size Shortcut 4
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="size4"  placeholder="Xl">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Product Size Details 4</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""   name="size_details4">
                            </div>
                         
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Product Size Shortcut 5
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="size5"  placeholder="XXL">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Product Size Details 5</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""name="size_details5" >
                            </div>
                         
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Product Variation</h5>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Option Name
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="topic1">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Option Value</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""   name="topic_details1" >
                            </div>
                         
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Option Name
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="topic2">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Option Value</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""   name="topic_details2" >
                            </div>
                        
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Option Name
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="topic3">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Option Value</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""  name="topic_details3" >
                            </div>
                       
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Option Name
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="topic4">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Option Value</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""   name="topic_details4">
                            </div>
                         
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="form-group">
                                <label for="validationCustom05" class="col-form-label pt-0">Option Name
                                    </label>
                                <input class="form-control" id="validationCustom05" type="text" required="" name="topic5">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Option Value</label>
                                <input class="form-control" id="validationCustom05" type="text" required=""name="topic_details5" >
                            </div>
                         
   
                            <input type="submit" value="Submit" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-light">
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Container-fluid Ends-->




@endsection

