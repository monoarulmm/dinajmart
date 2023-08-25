<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
Use App\Models\Category;
Use App\Models\Product;
Use App\Models\Shop;
Use App\Models\Cart;
Use App\Models\Wishlist;
Use App\Models\Order;
use App\Models\User;
use App\Models\Hero;

class HomeController extends Controller
{
    public function index(){


        if(Auth::id())
        {
          $id=Auth::user()->id;
          $carts=cart::where('user_id','=' ,$id)->get();
          $wishlists=wishlist::where('user_id','=' ,$id)->get();
          $total_cart=Cart::where('user_id','=' ,$id)->get()->count();

          
          $wishlists=Wishlist::where('user_id','=' ,$id)->get();
          $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();

          
          $categories=Category::Latest()->take(8)->get();
          $shops=Shop::Latest()->take(8)->get();


          $products=product::paginate(1);
          $nproducts = Product::Latest()->take(4)->get();

          $total_product=Product::all()->count();

          $hero=Hero::first();
  
        
          return view('content.users.home',compact('carts','total_cart','total_wishlist','wishlists','categories','shops','products','nproducts','total_product','hero','wishlists'));
        }
        else{


            $categories=Category::Latest()->take(8)->get();
            $shops=Shop::Latest()->take(8)->get();
            
            $products=product::paginate(1);
            $nproducts = Product::Latest()->take(4)->get();
            $total_product=Product::all()->count();
         
            $hero=Hero::first();
  
            return view('content.users.home',compact('categories','shops','products','nproducts','total_product','hero'));
         }
   
    }

    
    public function admindashboard(){


    //  $user = User::where('id', 1)->first();
    //  $user->assignRole('admin');

    // $user->givePermissionTo('edit');

    if (!Auth::check() || !Auth::user()->hasRole('admin')) {
        return redirect()->route('admin.category');
    }

    // $role = Role::where('name', 'admin')->first();
    // $role->givePermissionTo('edit');
          
      // $nproducts=Product::where('shop_slug',$slug)->get();
      $total_product=product::all()->count();
      $total_order=order::all()->count();
      $total_vendor=user::where('utype','=','ADM')->count();
      $total_user=user::where('utype','=','user')->count();
      $total_store=Shop::all()->count();
      $shops=Shop::paginate(3);

      
      $users=user::paginate(10);

      $order=Order::all();
   
      $total_revenue=0;
      foreach($order as $order)
      {
             $total_revenue=$total_revenue + $order->subtotal;
      }
   
      $total_delivered=order::where('delivery_status','=','delivered',)->get()->count();
      
      $total_processing=order::where('delivery_status','=','processing',)->get()->count();


        return view('content.admin.dashboard',compact('total_product','total_order','total_revenue','total_delivered','total_processing','users','total_user','total_vendor','total_store','shops'));
    }
    


    public function user($id)
{
    $users = user::find($id);
    $users->utype="ADM";

    $users->save();

    return redirect()->back();
}


    public function user_search(Request $request)
              {
   


                $search_text=$request->search;
                $users=user::where('name','LIKE',"%$search_text%")->orWhere
                ('phone','LIKE',"%$search_text%")->orWhere
                ('address','LIKE',"%$search_text%")->orWhere
                ('email','LIKE',"%$search_text%")->paginate(10);

                $total_product=product::all()->count();
                $total_order=order::all()->count();
   
  
          
                $order=Order::all();
             
                $total_revenue=0;
                foreach($order as $order)
                {
                       $total_revenue=$total_revenue + $order->subtotal;
                }
             
                $total_delivered=order::where('delivery_status','=','delivered',)->get()->count();
                
                $total_processing=order::where('delivery_status','=','processing',)->get()->count();
                $total_vendor=user::where('utype','=','ADM')->count();
                $total_user=user::where('utype','=','user')->count();
                $total_store=Shop::all()->count();
                $shops=Shop::all();


          
                  return view('content.admin.dashboard', compact('total_product','total_order','total_revenue','total_delivered','total_processing','users','total_vendor','total_user' ,'total_store','shops'));
              }












    public function admindetails(){



        return view('content.admin.admindetails');
    }
    



    public function tablecontent(){

        $categories = category::all();
        $shops = Shop::all();
        $products = Product::all();
        $orders = Order::all();

        return view('content.admin.tablecontent',compact('categories','shops','products','orders'));



    }


    public function contact(){



        if(Auth::id())
        {
          $id=Auth::user()->id;
          $carts=cart::where('user_id','=' ,$id)->get();
          $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
          $categories = Category::all();
          $wishlists=Wishlist::where('user_id','=' ,$id)->get();
          $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
          $total_product=Product::all()->count();
          $hero=Hero::first();
  

    
          return view('content.users.contact',compact('categories','carts','total_cart','wishlists','total_wishlist','hero'));
        }


        else{
        
              $categories = Category::all();
              $hero=Hero::first();
  

              return view('content.users.contact',compact('categories','hero'));

         }   



    }


    public function termscontition(){

  

      if(Auth::id())
      {
        $id=Auth::user()->id;
        $carts=cart::where('user_id','=' ,$id)->get();
        $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
        $categories = Category::all();
        $wishlists=Wishlist::where('user_id','=' ,$id)->get();
        $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
        $total_product=Product::all()->count();
        $hero=Hero::first();
  

  
        return view('content.users.term-condition',compact('categories','carts','total_cart','wishlists','total_wishlist','hero'));
      }


      else{
      
            $categories = Category::all();
            $hero=Hero::first();
  

            return view('content.users.term-condition',compact('categories','hero'));

       }   




    }

    public function privecy(){

       

      if(Auth::id())
      {
        $id=Auth::user()->id;
        $carts=cart::where('user_id','=' ,$id)->get();
        $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
        $categories = Category::all();
        $wishlists=Wishlist::where('user_id','=' ,$id)->get();
        $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
        $total_product=Product::all()->count();
        $hero=Hero::first();
  

  
        return view('content.users.privecy-policy',compact('categories','carts','total_cart','wishlists','total_wishlist','hero'));
      }


      else{
      
            $categories = Category::all();
            $hero=Hero::first();
  

            return view('content.users.privecy-policy',compact('categories','hero'));

       }   




    }
    public function aboutus(){

        

      if(Auth::id())
      {
        $id=Auth::user()->id;
        $carts=cart::where('user_id','=' ,$id)->get();
        $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
        $categories = Category::all();
        $wishlists=Wishlist::where('user_id','=' ,$id)->get();
        $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
        $total_product=Product::all()->count();
        $hero=Hero::first();
  

  
        return view('content.users.about-us',compact('categories','carts','total_cart','wishlists','total_wishlist','hero'));
      }


      else{
      
            $categories = Category::all();
            $hero=Hero::first();
  

            return view('content.users.about-us',compact('categories','hero'));

       }   




    }


}
    