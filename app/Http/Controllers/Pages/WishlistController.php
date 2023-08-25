<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Shop;
use App\Models\Hero;
class WishlistController extends Controller
{
     
    public function add_wishlist(Request $request,$id)
    {


    
   
                  
            if(Auth::id()){
            $user=Auth::user();
            $product=Product::find($id);
          

             $data = [
          
              "name"=>$user->name,
              "user_id"=>$user->id,
              "email"=>$user->email,
              "product"=>$product->product,
              "sale_price"=>$product->sale_price,
              "regular_price"=>$product->regular_price,
              "sale_percent"=>$product->sale_percent,
              "product_id"=>$product->id,
              "product_slug"=>$product->slug,
              "image"=>$product->image,
              "images"=>$product->images,
    
        
            
             ];
          

         
          
          
          wishlist::create($data);


          return redirect()->back()->with('message','We Recived Your Order . We will Connect with you  soon');
  
          }

          else{
            return redirect('login');
           }

            
    }
    
    


    
    public function delete_wishlist($id)
    {

        $wishlist=wishlist::find($id);

        
        $wishlist->delete();

        return redirect()->back()->with('message','wishlist deleted successfully');
            
        }
        


            public function my_wishlist(){
    

            if(Auth::id())
            {
  
              $id=Auth::user()->id;
              $carts=cart::where('user_id','=' ,$id)->get();
              $total_cart=Cart::where('user_id','=' ,$id)->get()->count();

              $wishlists=Wishlist::where('user_id','=' ,$id)->get();
              $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();

              $categories=Category::Latest()->take(8)->get();
              $hero=Hero::first();
  
            
              return view('content.users.pages.wishlist.my_wishlist',compact('carts','total_cart','total_wishlist','wishlists','categories','hero'));
            }
            
            else{
            
                return redirect('login');
             }
    
          
        }
        
}
