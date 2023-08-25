@section('title', 'category_pages')

@extends('layouts.admin')
@section('content')
<main class="w-full flex-grow p-6">
    <h1 class="w-full text-3xl text-black pb-6">প্রোডাক্ট ক্যাটাগরি আপডেট করুন</h1>

    

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
                <i class="fas fa-list mr-3"></i> Categories Form 
                <button class="btn-redirect"><a href="{{url('category')}}"> New Category</a></button>
              
            </p>
            <div class="leading-loose">
                <form action="{{ url('update_category_confirm',$category->id) }}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="mt-3">
                        <label class="block text-sm text-gray-600" for="name">ক্যাটাগরি নাম পরির্বতন করুন</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="category" type="text" required="" value="{{$category-> category}}"
                        @error('category')
                        <div class="text-denger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="message">ক্যাটাগরি বর্তমান ছবি</label>
                        <div>
                            <img class="w-full " src="/storage/category/{{ $category->image }}" alt="image">"
                        </div>


                        
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600">ছবি পরির্বতন করুন</label>
                        <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded"  name="image" type="file" required=""  >
                    </div>
              
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
