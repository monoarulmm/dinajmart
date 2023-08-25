<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;

class ReviewController extends Controller
{
    

      
      public function add_review(Request $request,$id)
      {
  
          $request->validate([
              
                   
              'comment' => 'string|required',
              'rating' => 'string|required',
     
  
              
           ],
           
           
           [
              
              'rating.string ' => 'rating Mustbe a string ',
              'comment.required ' => 'comment Mustbe a required ',
            
      
              
          
                     
               ]
           );
              

             
      
  
     
                    
              if(Auth::id()){
              $user=Auth::user();
              $product=product::find($id);
 

              
               $data = [
            
                "name"=>$user->name,
                "user_id"=>$user->id,
                "email"=>$user->email,
                "profile"=>$user->profile_photo_path, 
                "product"=>$product->product,
                "product_id"=>$product->slug,
          
                'comment' =>$request->comment,
                'rating' =>$request->rating,

                 
     

          
              
               ];
            
  
           
            
            
            review::create($data);


              
              return redirect()->back();
    
            }

            else{
              return redirect('login');
             }
  

            //   $product=product::find($id);
            //   $product=$product->product;
            //   $product_id=$product->id;
   
          
          
            //    $data = [
            
            //      'name' =>$name,
            //      'email' =>$email,
            //      'user_id' =>$userid,
            //      'product' =>$product,
            //      'product_id' => $product_id,
  
          
            //      'comment' =>$request->comment,
            //      'rating' =>$request->rating,
          
              
            //    ];
            
  
           
            
            
            // review::create($data);
          
            
            // if(Auth::id()){



            //   // $user=Auth()->user();
            //   // $name=$user->name;
            //   // $email=$user->email;
            //   // $user_id=Auth::id();
            //   // $productid=$id;
          
            //   // $comment=$request->comment;
            //   // $rating=$request->rating;

            //   // $review=new review;
            //   // $review->user_id=$user_id;
            //   // $review->name=$name;
            //   // $review->email=$email;
            //   // $review->product_id=$productid;
            //   // $review->product=$product_name;
          
            //   // $review->comment=$comment;
            //   // $review->rating=$rating;

            //   // $review->save();


            //   $user=Auth::user();
            //   $product=product::find($id);

            //   $review=new review;


            //   $review->name=$user->name;
            //   $review->email=$user->email;
        
            //   $review->user_id=$user->id;


            //   $review->name=$product->name;
            //   $review->email=$product->email;
            //   $review->product=$product->product;
            //   $review->product_id=$product->id;

            //   $review->comment=$request->comment;
            //   $review->rating=$request->rating;
            //   $review->save();


            //   return redirect()->back();
    
            // }

            // else{
            //   return redirect('login');
            //  }
  
  
              
      }
      
      
  
  
      
      public function delete_review($id)
      {
  
          $review=review::find($id);
  
  
          $image_path =public_path('storage/review/'.$review->image);
          if(file_exists($image_path))
          {
              unlink($image_path);
          }
          
          
          $review->delete();
  
          return redirect()->back()->with('message','review deleted successfully');
              
          }
          
          
   
}
