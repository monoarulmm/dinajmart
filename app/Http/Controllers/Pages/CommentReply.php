<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comment;
use App\Models\Reply;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CommentReply extends Controller
{
    
  public function add_comment(Request $request,$id){

    if(Auth::id())
    {

          $product=product::find($id);
          $comment= new comment;
          $comment->name=Auth::user()->name;
          $comment->user_id=Auth::user()->id;
          $comment->comment=$request->comment;

          $comment->product=$product->product;
          $comment->product_slug=$product->slug;


          $comment->save();
          return redirect()->back();
    }

    else{
     return redirect('login');
    }
 
 }


 public function add_reply(Request $request,$id){

   if(Auth::id())
   {
         $product=product::find($id);
         $reply= new reply;
         $reply->name=Auth::user()->name;
         $reply->user_id=Auth::user()->id;
         $reply->comment_id=$request->commentId;
         $reply->reply=$request->reply;

         
         $reply->product=$product->product;
         $reply->product_slug=$product->slug; 

         $reply->save();
         return redirect()->back();
   }

   else{
    return redirect('login');
   }

}


}
