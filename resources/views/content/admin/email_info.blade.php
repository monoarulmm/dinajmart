@section('title', 'dashboard')

@extends('layouts.admin')
@section('content')

<main class="w-full flex-grow p-6">
  <h1 class="text-3xl text-black pb-6">Send user to {{$order->email}}</h1>


  <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Categories Form
    </p>
    <div class="leading-loose">
        <form action="{{ url('send_user_email',$order->id) }}" method="POST" enctype="multipart/form-data">@csrf
            <div class="mt-3">
                <label class="block text-sm text-gray-600" for="name">Email Greeting</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="greeting" type="text"
                    required="" placeholder="Email Greeting">
            </div>
        
            <div class="mt-3">
                <label class="block text-sm text-gray-600" for="name">Email Firsting</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="firstine" type="text"
                    required="" placeholder="Email Firsting">
            </div>
        
            <div class="mt-3">
                <label class="block text-sm text-gray-600" for="name">Email Button Name</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="button" type="text"
                    required="" placeholder="Email Button Name">
            </div>
        
            <div class="mt-3">
                <label class="block text-sm text-gray-600" for="name">Email URL</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="url" type="text"
                    required="" placeholder="Email URL">
            </div>
        
            <div class="mt-3">
                <label class="block text-sm text-gray-600" for="name">Email List line</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="lastline" type="text"
                    required="" placeholder="Email List line">
            </div>
        
          
        
            <div class="mt-2">
            <label class=" block text-sm text-gray-600" for="message"> Email Body</label>
            <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded"  name="body" rows="6" required="" placeholder="email body.."></textarea>
        </div>
            <div class="mt-6">
                <input type="submit" value="Submit" class="btn-submit">
                <input type="reset" value="Reset" class="btn-cancel">
            </div>
        </form>
    </div>
</div>

</main>



@endsection

