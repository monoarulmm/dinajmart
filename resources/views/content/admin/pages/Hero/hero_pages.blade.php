

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
                        <h3>Add First Pages
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

        <div class="card-body">
            <div class="table-responsive table-desi">
                <table class="table all-package table-hero " id="editableTable">
                    <thead>
                        <tr>


                            <th>hero</th>
                            <th>Image</th>
                            <th>Option</th>

                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($heroes as $hero)
                            <tr>

                                <td data-field="name">{{$hero->text1}}</td>
                                <td>
                                    <img  src="/storage/hero/{{ $hero->image }}" alt="hero"
                                        data-field="image" alt="">
                                </td>

                                <td>
                                    <a href="{{route('update.hero', $hero->id) }}">
                                        <i class="fa fa-edit" title="Edit"></i>
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
        <form action="{{route('add.hero') }}" method="POST" enctype="multipart/form-data">@csrf
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
                                    Welcome-line1 & line2 </label>
                                    <div>
                                        <input name="text1" class="form-control" id="validationCustom01" type="text" required="">
                                           
                                        @error('text1')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    <div class="mt-2">
                                        <input class="form-control" id="validationCustomtitle" name="text2" type="text"
                                        required="">
                                                        
                                    @error('text2')
                                    <div class="text-denger">{{ $message }}</div>
                                     @enderror
                                    </div>
                            </div>


                            <div class="form-group">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Logo-Desktop & Mobile </label>
                                    <div>
                                        <input name="logo_d" class="form-control" id="validationCustom01" type="file" required="">
                                           
                                        @error('logo_d')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    <div class="mt-2">
                                        <input class="form-control" id="validationCustomtitle" name="logo_m" type="file"
                                        required="">
                                                        
                                    @error('logo_m')
                                    <div class="text-denger">{{ $message }}</div>
                                     @enderror
                                    </div>
                            </div>


                            
                            <div class="form-group">
                                <label for="validationCustomtitle"
                                    class="col-form-label pt-0"><span>*</span>DinajMart-HotLine</label>
                                    <input class="form-control" id="validationCustomtitle" name="hotline" type="text"
                                    required="">
                                    @error('hotline')
                                    <div class="text-denger">{{ $message }}</div>
                                     @enderror
                            </div>


                            <div class="form-group mt-5">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Hero-Section-Slider-1 </label>
                                    <div>
                                        <input name="line1" class="form-control" id="validationCustom01" type="text" required="" placeholder="title....">
                                           
                                        @error('line1')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>

                                    <div>
                                        <input name="line2" class="form-control" id="validationCustom01" type="text" required="" placeholder="sub_title----1"  >
                                           
                                        @error('line2')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    <div>
                                        <input name="line3" class="form-control" id="validationCustom01" type="text" required="" placeholder="short_desc----">
                                           
                                        @error('line3')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>




                                    <div class="mt-2">
                                        <input class="form-control" id="validationCustomtitle" name="img" type="file"
                                        required="">
                                                        
                                    @error('img')
                                    <div class="text-denger">{{ $message }}</div>
                                     @enderror
                                    </div>
                            </div>

                            <div class="form-group mt-5">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Hero-Section-Slider-2 </label>
                                    <div>
                                        <input name="line4" class="form-control" id="validationCustom01" type="text" required="" placeholder="title....">
                                           
                                        @error('line4')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>

                                    <div>
                                        <input name="line5" class="form-control" id="validationCustom01" type="text" required="" placeholder="sub_title----1"  >
                                           
                                        @error('line5')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    <div>
                                        <input name="line6" class="form-control" id="validationCustom01" type="text" required="" placeholder="short_desc----">
                                           
                                        @error('line6')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    <div>
                                        <input name="line7" class="form-control" id="validationCustom01" type="text" required="" placeholder="short_desc----">
                                           
                                        @error('line7')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>




                                    <div class="mt-2">
                                        <input class="form-control" id="validationCustomtitle" name="image" type="file"
                                        required="">
                                                        
                                    @error('image')
                                    <div class="text-denger">{{ $message }}</div>
                                     @enderror
                                    </div>
                            </div>

                            <div class="form-group mt-5">
                                <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                    Hero-Section-Slider-3 </label>
                                    <div>
                                        <input name="line8" class="form-control" id="validationCustom01" type="text" required="" placeholder="title....">
                                           
                                        @error('line8')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>

                                    <div>
                                        <input name="line9" class="form-control" id="validationCustom01" type="text" required="" placeholder="sub_title----1"  >
                                           
                                        @error('line9')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    <div>
                                        <input name="line10" class="form-control" id="validationCustom01" type="text" required="" placeholder="sub_title----1"  >
                                           
                                        @error('line10')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>
                                    <div>
                                        <input name="line11" class="form-control" id="validationCustom01" type="text" required="" placeholder="sub_title----1"  >
                                           
                                        @error('line11')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>

                                    <div>
                                        <input name="line12" class="form-control" id="validationCustom01" type="text" required="" placeholder="short_desc----">
                                           
                                        @error('line12')
                                        <div class="text-denger">{{ $message }}</div>
                                         @enderror
                                    </div>




                                    <div class="mt-2">
                                        <input class="form-control" id="validationCustomtitle" name="images" type="file"
                                        required="">
                                                        
                                    @error('images')
                                    <div class="text-denger">{{ $message }}</div>
                                     @enderror
                                    </div>
                            </div>

                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="form-group">
                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                            Banner Imges-Design 1,2,3 </label>
                            <div>
                                <input name="banner1" class="form-control" id="validationCustom01" type="file" required="">
                                   
                                @error('banner1')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>

                            <div class="mt-2">
                                <input class="form-control" id="validationCustomtitle" name="banner2" type="file"
                                required="">
                                                
                            @error('banner2')
                            <div class="text-denger">{{ $message }}</div>
                             @enderror
                            </div>

                            <div class="mt-2">
                                <input class="form-control" id="validationCustomtitle" name="banner3" type="file"
                                required="">
                                                
                            @error('banner3')
                            <div class="text-denger">{{ $message }}</div>
                             @enderror
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="validationCustomtitle"
                            class="col-form-label pt-0"><span>*</span>APP_Status</label>
                            <input class="form-control" id="validationCustomtitle" name="app_status" type="text"
                            required="">
                            @error('app_status')
                            <div class="text-denger">{{ $message }}</div>
                             @enderror
                    </div>


                    <div class="form-group">
                        <label for="validationCustomtitle"
                            class="col-form-label pt-0"><span>*</span>All-Payment-Getway_images</label>
                            <input class="form-control" id="validationCustomtitle" name="paymentimg" type="file"
                            required="">
                            @error('paymentimg')
                            <div class="text-denger">{{ $message }}</div>
                             @enderror
                    </div>
                 
                <div class="card">

                    <div class="form-group">
                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                            Socile-Media-link </label>
                            <div>
                                <label>Facebook</label>
                                <input name="link1" class="form-control" id="validationCustom01" type="text" required="">
                                @error('link1')
                                <div class="text-denger">{{ $message }}</div>
                                 @enderror
                            </div>
                            <div class="mt-2">
                                <label>Twiter</label>
                                <input class="form-control" id="validationCustomtitle" name="link2" type="text"
                                required="">
                                                
                            @error('link2')
                            <div class="text-denger">{{ $message }}</div>
                             @enderror
                            </div>
                            <div class="mt-2">
                                <label>Instagram</label>
                                <input class="form-control" id="validationCustomtitle" name="link3" type="text"
                                required="">
                                                
                            @error('link3')
                            <div class="text-denger">{{ $message }}</div>
                             @enderror
                            </div>
                            <div class="mt-2">
                                <label>YouTube</label>
                                <input class="form-control" id="validationCustomtitle" name="link4" type="text"
                                required="">
                                                
                            @error('link4')
                            <div class="text-denger">{{ $message }}</div>
                             @enderror
                            </div>
                       
                    </div>

               
                             <input type="submit" value="Submit" class="btn btn-primary">
                               {{-- <input type="reset" value="Reset" class="btn btn-light"> --}}
                      
                  
                   
                   
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- Container-fluid Ends-->




@endsection

