<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\Wishlist;
use App\Models\Hero;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class ShopController extends Controller
{



   public function vendor_dashboard($id)
   {
  
    $user=user::findOrfail($id);
    $shops=Shop::findOrfail($id);
    $id=$shops->id;

    $total_order =Order::Where('shop_id','=',$id)->count();
    $total_product=product::Where('shop_id','=',$id)->count();
    $orders=Order::Where('shop_id','=',$id)->get();



    $order=Order::Where('shop_id','=',$id)->get();
    $total_revenue=0;
    foreach($order as $order)
    {
           $total_revenue=$total_revenue + $order->subtotal;
    }




 
     $total_delivered = Order::where([
      ['delivery_status', '=', 'delivered'],
      ['shop_id', '=', $id]
    ])->count();

     $total_processing = Order::where([
      ['delivery_status', '=', 'processing'],
      ['shop_id', '=', $id]
    ])->count();
    



    
  //   $shop_id = $id;
  //   $currentMonth = Carbon::now()->month;
  //   $orderm = Order::where('shop_id', $shop_id)->whereMonth('created_at', $currentMonth)->get();

  //   $total_revenue = 0;

  //  foreach ($orderm as $order) {
  //   $total_revenue_m += $order->subtotal;
  //  }



    return view('content.admin.pages.vendor_dashboard',compact('total_product','total_order','total_revenue','total_delivered','total_processing','user','orders'));
   }


    public function shop_page(){

        
        $user=Auth::user();
        $userid=$user->id;
        $shops =Shop::Where('user_id','=',$userid)->get();
        return view('content.admin.pages.store.store_pages',compact('shops','user'));
    }
    
    public function add_shop(Request $request)
    {

        $request->validate([
            
                 
            'title' => 'string|required',
            'location' => 'string|required',
            'owner' => 'string|required',
            'shop' => 'string|required',
            'description' => 'string',
            'image' => 'image|file|required|max:5120',
       
         
            
         ],
         
         
         [
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',
            
            'location.string ' => 'location Mustbe a string ',
            'location.required ' => 'location Mustbe a required ',
            
            'owner.string ' => 'owner Mustbe a string ',
            'owner.required ' => 'owner Mustbe a required ',

            'shop.string ' => 'shop Mustbe a string ',
            'shop.required ' => 'shop Mustbe a required ',
            
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',
    
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10024KB',
            
        
                   
             ]
         );
        
   
         $user=Auth()->user();
         $userid=$user->id;
         $name=$user->name;
         $email=$user->email;

    

     
          // image file name
          $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
          // move the  image
          $request->image->move(public_path('storage/shop'), $file_name);
     
     
          $data = [
       
            'name' =>$name,
            'email' =>$email,
            'user_id' =>$userid,

     
            'title' =>$request->title,
            'shop' =>$request->shop,
            'location' =>$request->location,
            'owner' =>$request->owner,
            'description' =>$request->description,
            'image' =>$file_name,
      
         
          ];
       

      
       
       
       shop::create($data);
     


         return redirect()->back()->with('message','shop-added successfully');
 }
 
 

    


    
    public function delete_shop($id)
    {

        $shop=shop::find($id);


        $image_path =public_path('storage/shop/'.$shop->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $shop->delete();

        return redirect()->back()->with('message','shop deleted successfully');
            
        }
        
        
        
        public function update_shop($id)
        {
    

           
        $shop=shop::find($id);

            return view('content.admin.pages.store.store_update', compact('shop'));
                
            }
            
            

            public function update_shop_confirm(Request $request,  $id)
            {
                $request->validate([
            
                 
            'title' => 'string|required',
            'location' => 'string|required',
            'owner' => 'string|required',
            // 'shop' => 'string|required',
            'description' => 'string|required',
            'image' => 'image|file|required|max:10240',
    
            
         ],
         
         
         [
            
            'title.string ' => 'title Mustbe a string ',
            'title.required ' => 'title Mustbe a required ',
            
            'location.string ' => 'location Mustbe a string ',
            'location.required ' => 'location Mustbe a required ',
            
            'owner.string ' => 'owner Mustbe a string ',
            'owner.required ' => 'owner Mustbe a required ',

            'shop.string ' => 'shop Mustbe a string ',
            'shop.required ' => 'shop Mustbe a required ',
            
            'description.string ' => 'description Mustbe a string ',
            'description.required ' => 'description Mustbe a required ',
    
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10240KB',
            
        
                   
             ]
         );   $get_data = shop::where('id', $id)->first();
         $image_name =  $get_data->image;
      
       
       
       
         if($request->hasFile('image')){
       
           if(File::exists(public_path('storage/shop/') . $image_name)){
             File::delete(public_path('storage/shop/') . $image_name);
       
           }
       
       
         // image file name
            $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
         // move the  image
            $request->image->move(public_path('storage/shop'), $file_name);
       
         }else{
           $file_name = $get_data->image;
         }
       
       
        
         $user=Auth()->user();
         $userid=$user->id;
         $name=$user->name;
         $email=$user->email;    
 
    
         $data = [
       
          'name' =>$name,
          'email' =>$email,
          'user_id' =>$userid,

   
          'title' =>$request->title,
          'shop' =>$request->shop,
          'location' =>$request->location,
          'owner' =>$request->owner,
          'description' =>$request->description,
          'image' =>$file_name,
    
       
        ];
     
 
   
    
    
        shop::findOrFail($id)->update($data);
 
 
                      
     return redirect()->back()->with('message','shop updated successfully');
      
              
    }

      
                 
    public function shop_all(){


      if(Auth::id())
      {
        $id=Auth::user()->id;
        $carts=cart::where('user_id','=' ,$id)->get();
        $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
      
        $shops = shop::all();
        $categories = Category::all();
        $nshops = shop::Latest()->take(4)->get();
      
      
        
      
        $wishlists=Wishlist::where('user_id','=' ,$id)->get();
        $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
        $total_shop=shop::all()->count();
        $hero=Hero::first();
  
      
        return view('content.users.pages..store.store_show',compact('shops','categories','nshops','carts','total_cart','wishlists','total_wishlist','total_shop','hero'));
      }
      else{
      
        $shops = shop::all();
        $categories = Category::all();
        $nshops = shop::Latest()->take(4)->get();
        $total_shop=shop::all()->count();
        $hero=Hero::first();
  
      
        return view('content.users.pages..store.store_show',compact('shops','categories','nshops','total_shop','hero'));
       }
      
      
      }
      
      
      
      
      public function shop_search(Request $request)
      {
      
      if(Auth::id())
      {
      $id=Auth::user()->id;
      $carts=cart::where('user_id','=' ,$id)->get();
      $total_cart=Cart::where('user_id','=' ,$id)->get()->count();  
      $wishlists=Wishlist::where('user_id','=' ,$id)->get();
      $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
      
      
      // $shops = shop::all();
      $categories = Category::all();
      $search_text=$request->search;
      $shops=shop::where('name','LIKE',"%$search_text%")->orWhere
      ('shop','LIKE',"%$search_text%")->paginate(10);
      $hero=Hero::first();
  
      
      
      
      
      return view('content.users.pages..store.store_show',compact('shops','categories','carts','total_cart','wishlists', 'total_wishlist','hero'));
      }
      else{
      
      // $shops = shop::all();
      $categories = Category::all();
      $search_text=$request->search;
      $shops=shop::where('name','LIKE',"%$search_text%")->orWhere
      ('shop','LIKE',"%$search_text%")->paginate(10);
      $hero=Hero::first();
  
      
      return view('content.users.pages..store.store_show',compact('shops','categories','hero'));
      }
      
      }
      
      



        public function product_search(Request $request)
        {

          if(Auth::id())
          {
            $id=Auth::user()->id;
            $carts=cart::where('user_id','=' ,$id)->get();
            $total_cart=Cart::where('user_id','=' ,$id)->get()->count();  
            $wishlists=Wishlist::where('user_id','=' ,$id)->get();
            $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
            $hero=Hero::first();
  


            // $products = Product::all();
            $categories = Category::all();
            $search_text=$request->search;
            $products=product::where('product','LIKE',"%$search_text%")->orWhere
            ('shop','LIKE',"%$search_text%")->orWhere
            ('category','LIKE',"%$search_text%")->paginate(10);



          
            return view('content.users.pages..product.product_show',compact('products','categories','carts','total_cart','wishlists', 'total_wishlist','hero'));
          }
          else{
          
            // $products = Product::all();
            $categories = Category::all();
            $search_text=$request->search;
            $products=product::where('product','LIKE',"%$search_text%")->orWhere
            ('shop','LIKE',"%$search_text%")->orWhere
            ('category','LIKE',"%$search_text%")->paginate(10);
            $hero=Hero::first();
  
          
            return view('content.users.pages..product.product_show',compact('products','categories','hero'));
           }

        }
           


              
        public function shop_details($slug){


          if(Auth::id())
          {
            $id=Auth::user()->id;
            $carts=cart::where('user_id','=' ,$id)->get();
            $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
            $wishlists=Wishlist::where('user_id','=' ,$id)->get();
            $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
            $categories=Category::Latest()->take(8)->get();

            $shops=Shop::where('slug',$slug)->first();

            // $nproducts = Product::Latest()->take(4)->get();

            $nproducts=Product::where('shop_slug',$slug)->get();
            $hero=Hero::first();
  
          



            return view('content.users.pages.store.store_details',compact('carts','total_cart','total_wishlist','wishlists','categories','shops','nproducts','hero'));
          }


          else{
          

            $categories=Category::Latest()->take(8)->get();

            $shops=Shop::where('slug',$slug)->first();
            // $nproducts = Product::Latest()->take(4)->get();
            $nproducts=Product::where('shop_slug',$slug)->get();
            $hero=Hero::first();
  
        
              return view('content.users.pages.store.store_details',compact('categories','shops','nproducts','hero'));
           }


        
   
          }
}
