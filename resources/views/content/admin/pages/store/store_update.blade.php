@section('title', 'shop_pages')

@extends('layouts.admin')
@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="w-full text-3xl text-black pb-6"> shop</h1>

    

    @if (session()->has('message'))
    <div class="text-green-400">
        {{ session()->get('message') }}
    </div>
@endif



@if ($errors->any())
    <div class="text-red-900">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/1 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> shop Form 
                <button class="btn-redirect"><a href="{{url('shop')}}"> New shop</a></button>
              
            </p>

        
            <div class="leading-loose">
                <form action="{{ url('update_shop_confirm',$shop->id) }}" method="POST" enctype="multipart/form-data">@csrf

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add shop</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="shop" type="text"
                            required="" value="{{$shop->shop}}">
        
                        @error('shop')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add shop title</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="title" type="text" required="" value="{{$shop->title}}"
                        @error('title')
                        <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Owner</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="owner" type="text"
                            required="" value="{{$shop->owner}}"">

                        @error('owner')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">Add shop Location</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="location" type="text"
                            required="" value="{{$shop->location}}">

                        @error('location')
                            <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="message">Current Image</label>
                        <div>
                            <img class="w-full " src="/storage/shop/{{ $shop->image }}" alt="image">"
                        </div>


                        
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600">Change Image</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="image" type="file" required=""  >
                    </div>

                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="message">Description</label>
                        <input type="text" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded"  name="description"  value="{{$shop->description}} required="" placeholder="Your shop details..">
    
                        @error('description')
                        <div class="text-denger">{{ $message }}</div>
                    @enderror
              
                    <div class="mt-6">

                        <input type="submit" value="Submit" class="btn-submit">
                        <input type="reset" value="Reset" class="btn-cancel">

                    
                  
                    </div>
                </form>
            </div>
        </div>
 
    </div>

</main>


@endsection
