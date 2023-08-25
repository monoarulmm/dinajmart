<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Shop;
use App\Models\Hero;

use App\Models\Product;
use PDF;
use Notification;
use App\Notifications\ProductOrderNotification;
// use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
 public function cash_order(Request $request)
{


  $request->validate([
            
                 
    'note' => 'string|required',
    'payment_option' => 'string|required',
    'without_dinajpur' => 'string|required',
  
 
    
 ],
 
 
 [
    
    'note.string ' => 'note Mustbe a string ',
    'note.required ' => 'note Mustbe a required ',

    
    'payment_option.string ' => 'payment_option Mustbe a string ',
    'payment_option.required ' => 'payment_option Mustbe a required ',

    'without_dinajpur.string ' => 'without_dinajpur Mustbe a string ',
    'without_dinajpur.required ' => 'without_dinajpur Mustbe a required ',

  
    

           
     ]
 );

 
            $user=Auth::user();
            $userID = $user->id;
            // $product=Product::find($id);

  // dd($userID);
        $data=cart::where('user_id', '=',$userID)->get();
        // dd($data);
        foreach($data as $data)
        {
          $order=new order;
          $order->name=$data->name;
          $order->email=$data->email;
          $order->phone=$data->phone;
          $order->address=$data->address;
          $order->user_id=$data->user_id;
          
  

          $order->product=$data->product;
          $order->quantity=$data->quantity;
          $order->price=$data->price;
          $order->subtotal=$data->subtotal;

          $order->shop=$data->shop;
          $order->shop_id=$data->shop_id;
          $order->shop_slug=$data->shop_slug;

          $order->note=$request->note;
          $order->image=$data->image;
          $order->product_id=$data->product_id;
          $order->product_slug=$data->product_slug;
          $order->payment_status=$request->payment_option;

          $order->without_dinajpur=$request->without_dinajpur;
          $order->diff_address=$request->diff_address;
          $order->courier=$request->courier;
          $order->courier_amount=$request->courier_amount;

          $order->delivery_status='processing';

          $order->save();
          $cart_id=$data->id;
          $cart=cart::find($cart_id);
          $cart->delete();

        
        }

        
        return redirect()->back()->with('message','We Recived Your Order . We will Connect with you  soon');
}



public function show_order(){

    if(Auth::id())
  
  
    {
  
  
      $user=Auth::user();
      $userID=$user->id;
      $orders=order::where('user_id','=',$userID)->get();
      $hero=Hero::first();
  
  
          return view('content.users.pages.order.show_order',compact('orders','hero'));
    }
    else{
      return redirect('login');
     }
  
  }
  
  
   public function cancel_order($id)
   {
  
    $order=order::find($id);
    $order->delivery_status='cancelled  Order';
    $order->delete();
  
    return redirect()->back()->with('message','Ordered Cancel Successfully');
  
  
  
   }



//    admin

 public function order()
{
  if(Auth::id())
  {


    $user=Auth::user(); 
    // $id=Auth::user()->id;


         
    // $orders = Order::find($shop_id);
    // $orders=Order::all();

    // $orders = DB::table('orders')
    //             ->where('shop_id')
    //             ->get();
    $shops=Shop::first();
    $id=$shops->id;


                   
    $orders =Order::Where('shop_id','=',$id)->get();


    // $orders = Order::where('shop_id', '=', 'shop_id')->get()->all();
    return view ('content.admin.pages.order.my_order',compact('orders','user'));
  }
  else{
  
      return redirect('login');
   }

}


public function delivered($id)
{
    $order = order::find($id);
    $order->delivery_status="delivered";
    $order->payment_status='Paid';
    $order->save();

    return redirect()->back();
}

public function processed($id)
{
    $order = order::find($id);
    $order->delivery_status="come our address";
    // $order->payment_status='Paid';
    $order->save();

    return redirect()->back();
}



public function print_pdf($id){

  $order=order::find($id);

 $pdf=PDF::loadview('content.admin.print_pdf',compact('order'));
 return $pdf->download('order_details.pdf');

}
public function send_email($id){


  $order=order::find($id);
 return view('content.admin.email_info',compact('order'));

}
public function send_user_email(Request $request,$id){


  $order=order::find($id);

  $details= [

    'greeting'=>$request->greeting,
    'firstline'=>$request->firstline,
    'lastline'=>$request->lastline,
    'url'=>$request->url,

    'body'=>$request->body,
    'button'=>$request->button,

  ];

    Notification::send($order,new ProductOrderNotification($details));
 return view('content.admin.email_info',compact('order'));

}


}
