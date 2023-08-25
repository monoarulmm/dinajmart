<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Shop;
use App\Models\Hero;
use App\Models\Category;
use App\Models\Wishlist;

class CartController extends Controller
{


   


    public function add_cart(Request $request,$id)
    {

        $request->validate([
            
                 
            'quantity' => 'string|required',
            'color' => 'string|required',
            'size' => 'string|required',
    
            
         ],
         
         
         [
            
            'quantity.string ' => 'quantity Mustbe a string ',
            'color.string ' => 'color Mustbe a string ',
            'size.string ' => 'size Mustbe a string ',
    
                   
             ]
         );


         
                  
            if(Auth::id()){
            $user=Auth::user();
            $product=product::find($id);
    
         


              $cart=new cart;


              $cart->name=$user->name;
              $cart->email=$user->email;
              $cart->address=$user->address;
              $cart->phone=$user->phone;
              $cart->user_id=$user->id;

              $cart->product_title=$product->title;
              $cart->product=$product->product;
              $cart->image=$product->image;
              $cart->product_id=$product->id;
              $cart->product_slug=$product->slug;

              $cart->shop_id=$product->shop_id;
              $cart->shop=$product->shop;
              $cart->shop_slug=$product->shop_slug;

              $cart->price=$product->sale_price;

              if($product->sale_price!=null)
              {
               $cart->subtotal=$product->sale_price *$request->quantity ;
              }
              
              else 
              {
               $cart->subtotal=$product->regular_price*$cart->quantity;
              }
      
      
          
              $cart->quantity=$request->quantity;
              $cart->color=$request->color;
              $cart->size=$request->size;
              $cart->save();


        
            return redirect()->back()->with('message','cart added successfully');
  
          }

          else{
            return redirect('login');
           }


            
    }
    

    public function delete_cart($id)
    {

        $cart=cart::find($id);
        $cart->delete();

        return redirect()->back()->with('message','cart deleted successfully');
            
        }


        public function update_product_confirm(Request $request,  $id)
        {

          $request->validate([
            
                 
            'quantity' => 'string|required',
            'color' => 'string|required',
            'size' => 'string|required',
    
            
         ],
         
         
         [
            
            'quantity.string ' => 'quantity Mustbe a string ',
            'color.string ' => 'color Mustbe a string ',
            'size.string ' => 'size Mustbe a string ',
    
                   
             ]
         );
            
        
    
       
                      
                if(Auth::id()){
                $user=Auth::user();
                $product=product::find($id);
     
               
    
    
                  $cart=cart::find($id);
    
    
                  $cart->name=$user->name;
                  $cart->email=$user->email;
                  $cart->user_id=$user->id;
                  $cart->address=$user->address;
                  $cart->phone=$user->phone;
    
                  $cart->product_title=$product->title;
                  $cart->product=$product->product;
                  $cart->image=$product->image;
                  $cart->product=$product->product;
                  $cart->product_id=$product->id;
           
                  $cart->shop=$product->shop;
                  $cart->shop_id=$shop->shop_id;
                
                  $cart->price=$product->sale_price;
    
                  if($product->sale_price!=null)
                  {
                   $cart->subtotal=$product->sale_price *$request->quantity ;
                  }
                  
                  else 
                  {
                   $cart->subtotal=$product->regular_price*$cart->quantity;
                  }
          
          
              
                  $cart->quantity=$request->quantity;
                  $cart->save();
    
    
            
                return redirect()->back()->with('message','cart added successfully');
      
              }
    
              else{
                return redirect('login');
               }
    
    
                
        }


        public function my_cart(){
    

            if(Auth::id())
            {
              $user=Auth::user(); 
              
              $id=Auth::user()->id;
              $carts=cart::where('user_id','=' ,$id)->get();
              $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
              $categories = Category::all();
              $wishlists=Wishlist::where('user_id','=' ,$id)->get();
              $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
              $hero=Hero::first();
  
       
            
              return view('content.users.pages.cart.my_cart',compact('carts','total_cart','user','categories','total_cart','wishlists','total_wishlist','hero'));
            }
            else{
            
                return redirect('login');
             }
    
          
        }
     


        public function cart_details($id){


            $cart=cart::find($id);
            $carts=cart::where('user_id','=' ,$id)->get();
            $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
       
          
            return view('content.users.pages.cart.cart_details',compact('cart','total_cart','carts'));
          }
         
    
            

        


}
