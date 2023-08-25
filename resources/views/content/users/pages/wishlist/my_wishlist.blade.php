@section('title', 'wishlist_all')
<base href="/public">
@extends('layouts.main')
@section('content')

@include('sections.9_header')
@include('sections.header')

	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">

            @foreach ($wishlists as $wishlist)
              
     
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="storage/product/{{$wishlist->image}}" alt=""></figure>
							</div>
							
							<div class="product-name">
								<a class="link-to-product" href="{{url('product_details',$wishlist->product_slug)}}">{{$wishlist->product}}</a>
							</div>
					
							<div>
								<a href="{{url('delete_wishlist',$wishlist->id)}}" class="btn btn-delete">
									<i class="fa fa-times-circle"></i>
								</a>
							</div>
						</li>

            @endforeach
															
					</ul>
				</div>

			

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->

    
@endsection
