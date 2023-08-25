<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use App\Models\Category;
use App\Models\Shop;  
use App\Models\Cart;  
use App\Models\Review;
use App\Models\Wishlist;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Hero;
class ProductController extends Controller
{
    public function product_page(){

        $user=Auth::user();
        $userid=$user->id;

        $categories =Category::all();
        
        $products =Product::Where('user_id','=',$userid)->get();

        $shops =Shop::Where('user_id','=',$userid)->get();

        $shop=Shop::first();

        
      

   
    
        return view('content.admin.pages.product.product_pages',compact('products','categories','shops','shop','user'));
    }


    public function product_list(){


      $user=Auth::user();
      $userid=$user->id;

      $products =Product::Where('user_id','=',$userid)->get();

    

      
  
      return view('content.admin.pages.product.product_list',compact('products','user'));

    }
    
    public function add_product(Request $request,$id)
    {

      $request->validate([
            
                 
        'title' => 'string|required',
        'category' => 'string|required',
        'shop' => 'string|required',
        'shop_slug' => 'string|required',
        'product' => 'string|required',
        'stock_status' => 'string|required',
        'SKU' => 'string|required',
        'featured' => 'string|required',
        'quantity' => 'string|required',
        'return' => 'string|required',
        'authentic' => 'string|required',
        'warranty' => 'string|required',

        'tag' => 'string|required',

        'regular_price' => 'string|required',
        'sale_price' => 'string|required',
        'sale_percent' => 'string|required',
        'description' => 'string|required',
        'image' => 'image|file|required|max:5120',
        'images' => 'image|file|required|max:5120',
        'img' => 'image|file|required|max:5120',
     
        
     ],
     
     
     [
        
        'title.string ' => 'title Mustbe a string ',
        'title.required ' => 'title Mustbe a required ',
        


        'warranty.string ' => 'warranty Mustbe a string ',
        'warranty.required ' => 'warranty Mustbe a required ',

        'tag.string ' => 'tag Mustbe a string ',
        'tag.required ' => 'tag Mustbe a required ',

        'authentic.string ' => 'authentic Mustbe a string ',
        'authentic.required ' => 'authentic Mustbe a required ',





        'category.string ' => 'category Mustbe a string ',
        'category.required ' => 'category Mustbe a required ',

        'featured.string ' => 'featured Mustbe a string ',
        'featured.required ' => 'featured Mustbe a required ',
        

        'product.string ' => 'product Mustbe a string ',
        'product.required ' => 'product Mustbe a required ',

        'return.string ' => 'return Mustbe a string ',
        'return.required ' => 'return Mustbe a required ',

        'SKU.string ' => 'SKU Mustbe a string ',
        'SKU.required ' => 'SKU Mustbe a required ',

        'sale_percent.string ' => 'sale_percent Mustbe a string ',
        'sale_percent.required ' => 'sale_percent Mustbe a required ',

        'sale_price.string ' => 'sale_price Mustbe a string ',
        'sale_price.required ' => 'sale_price Mustbe a required ',

        'shop.string ' => 'shop Mustbe a string ',
        'shop.required ' => 'shop Mustbe a required ',

        'shop_slug.string ' => 'shop_slug Mustbe a string ',
        'shop_slug.required ' => 'shop_slug Mustbe a required ',

        'quantity.string ' => 'quantity Mustbe a string ',
        'quantity.required ' => 'quantity Mustbe a required ',

        'regular_price.string ' => 'regular Mustbe a string ',
        'regular_price.required ' => 'regular Mustbe a required ',

        'stock_status.string ' => 'stock_status Mustbe a string ',
        'stock_status.required ' => 'stock_status Mustbe a required ',
        
        'description.string ' => 'description Mustbe a string ',
        'description.required ' => 'description Mustbe a required ',

        'image.file' => 'file must be type of file',
        'image.image' => 'file must be image',
        'image.required' => 'you must choose a file',
        'image.size' => 'max file size id 5120KB',

        'images.file' => 'file must be type of file',
        'images.image' => 'file must be image',
        'images.required' => 'you must choose a file',
        'image.size' => 'max file size id 5120KB',

        'img.file' => 'file must be type of file',
        'img.image' => 'file must be image',
        'img.required' => 'you must choose a file',
        'image.size' => 'max file size id 5120KB',
        
    
               
         ]
     );
    

        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $email=$user->email;
        $shop=Shop::find($id);
 
  
    


 


       
    
         // image file name
         $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
         // move the  image
         $request->image->move(public_path('storage/product'), $file_name);

         // img file name1
         $file_name1 = time() . Str::upper(Str::random(16)) . '.' . $request->img->extension();
         // move the  image
         $request->img->move(public_path('storage/product'), $file_name1);




         // image file name
         $file_name2 = time() . Str::upper(Str::random(16)) . '.' . $request->images->extension();
         // move the  image
         $request->images->move(public_path('storage/product'), $file_name2);
    
    
         $data = [
      
       
          'name' =>$name,
          'email' =>$email,
          'user_id' =>$userid,


         
     
 
      
          'title' =>$request->title,
          'category' =>$request->category,
          'shop' =>$request->shop,
          'shop_id' =>$shop->id,
          'shop_slug' =>$request->shop_slug,
          'description' =>$request->description,
          'product' =>$request->product,
          'stock_status' =>$request->stock_status,
          'featured' =>$request->featured,
          'quantity' =>$request->quantity,
          'return' =>$request->return,
          'SKU' =>$request->SKU,
          'color' =>$request->color,
          'authentic' =>$request->authentic,
          'warranty' =>$request->warranty,
          'tag' =>$request->tag,
          'size' =>$request->size,
          'regular_price' =>$request->regular_price,
          'sale_price' =>$request->sale_price,
          'sale_percent' =>$request->sale_percent,

          
          'color1' =>$request->color1,
          'color2' =>$request->color2,
          'color3' =>$request->color3,
          'color4' =>$request->color4,
          'color5' =>$request->color5,

          'size1' =>$request->size1,
          'size2' =>$request->size2,
          'size3' =>$request->size3,
          'size4' =>$request->size4,
          'size5' =>$request->size5,

          'size_details1' =>$request->size_details1,
          'size_details2' =>$request->size_details2,
          'size_details3' =>$request->size_details3,
          'size_details4' =>$request->size_details4,
          'size_details5' =>$request->size_details5,



          'topic1' =>$request->topic1,
          'topic2' =>$request->topic2,
          'topic3' =>$request->topic3,
          'topic4' =>$request->topic4,
          'topic5' =>$request->topic5,
          
          'topic_details1' =>$request->topic_details1,
          'topic_details2' =>$request->topic_details2,
          'topic_details3' =>$request->topic_details3,
          'topic_details4' =>$request->topic_details4,
          'topic_details5' =>$request->topic_details5,






  
          'image' =>$file_name,
          'img' =>$file_name1,
          'images' =>$file_name2,
          
        
         ];
      

     
      
      
      product::create($data);
      


      return redirect()->back()->with('message','product-added successfully');
    }
    
    


    
    public function delete_product($id)
    {

        $product=product::find($id);


        $image_path =public_path('storage/product/'.$product->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        $image_path =public_path('storage/product/'.$product->img);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $image_path =public_path('storage/product/'.$product->images);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $product->delete();

        return redirect()->back()->with('message','product deleted successfully');
            
        }
        
        
        
        public function update_product($id)
        {
    

        
        $product=product::find($id);

        $user=Auth::user();
        $userid=$user->id;
        $categories =Category::all();
        $shops =Shop::Where('user_id','=',$userid)->get();

            return view('content.admin.pages.product.product_update', compact('product','categories','shops','user'));
                
            }
            
            

            public function update_product_confirm(Request $request,  $id)
            {
              
              $request->validate([
            
                 
                'title' => 'string|required',
                'category' => 'string|required',
                'product' => 'string|required',
                'stock_status' => 'string|required',
                'SKU' => 'string|required',
                'featured' => 'string|required',
                'quantity' => 'string|required',
                'return' => 'string|required',
                'authentic' => 'string|required',
                'warranty' => 'string|required',
    
                'tag' => 'string|required',
    
                'regular_price' => 'string|required',
                'sale_price' => 'string|required',
                'sale_percent' => 'string|required',
                'description' => 'string|required',
                'image' => 'image|file|required|max:5120',
                'images' => 'image|file|required|max:5120',
                'img' => 'image|file|required|max:5120',
             
                
             ],
             
             
             [
                
                'title.string ' => 'title Mustbe a string ',
                'title.required ' => 'title Mustbe a required ',
                
                'color.string ' => 'color Mustbe a string ',
                'color.required ' => 'color Mustbe a required ',
        
                'warranty.string ' => 'warranty Mustbe a string ',
                'warranty.required ' => 'warranty Mustbe a required ',
        
                'tag.string ' => 'tag Mustbe a string ',
                'tag.required ' => 'tag Mustbe a required ',
        
                'authentic.string ' => 'authentic Mustbe a string ',
                'authentic.required ' => 'authentic Mustbe a required ',
        
                'size.string ' => 'size Mustbe a string ',
                'size.required ' => 'size Mustbe a required ',
        
        
        
                'category.string ' => 'category Mustbe a string ',
                'category.required ' => 'category Mustbe a required ',
        
                'featured.string ' => 'featured Mustbe a string ',
                'featured.required ' => 'featured Mustbe a required ',
                
        
                'product.string ' => 'product Mustbe a string ',
                'product.required ' => 'product Mustbe a required ',
        
                'return.string ' => 'return Mustbe a string ',
                'return.required ' => 'return Mustbe a required ',
        
                'SKU.string ' => 'SKU Mustbe a string ',
                'SKU.required ' => 'SKU Mustbe a required ',
        
                'sale_percent.string ' => 'sale_percent Mustbe a string ',
                'sale_percent.required ' => 'sale_percent Mustbe a required ',
        
                'sale_price.string ' => 'sale_price Mustbe a string ',
                'sale_price.required ' => 'sale_price Mustbe a required ',
        
       
        
                'quantity.string ' => 'quantity Mustbe a string ',
                'quantity.required ' => 'quantity Mustbe a required ',
        
                'regular_price.string ' => 'regular Mustbe a string ',
                'regular_price.required ' => 'regular Mustbe a required ',
        
                'stock_status.string ' => 'stock_status Mustbe a string ',
                'stock_status.required ' => 'stock_status Mustbe a required ',
                
                'description.string ' => 'description Mustbe a string ',
                'description.required ' => 'description Mustbe a required ',
        
                'image.file' => 'file must be type of file',
                'image.image' => 'file must be image',
                'image.required' => 'you must choose a file',
                'image.size' => 'max file size id 5120KB',
        
                'images.file' => 'file must be type of file',
                'images.image' => 'file must be image',
                'images.required' => 'you must choose a file',
                'image.size' => 'max file size id 5120KB',
        
                'img.file' => 'file must be type of file',
                'img.image' => 'file must be image',
                'img.required' => 'you must choose a file',
                'image.size' => 'max file size id 5120KB',
                
            
                       
                 ]
             );
            

                             
        $get_data = Product::where('id', $id)->first();
        $image_name =  $get_data->image;
        $image_name2 =  $get_data->images;
        $image_name3 =  $get_data->img;
     
      


      
    $getData = Product::where('id', $id)->first();
    $imageName = $getData->image;
    
  
    
    if ($request->hasFile('image')) {
      if (File::exists(public_path('storage/product/') . $imageName)) {
        File::delete(public_path('storage/product/') . $imageName);
      }
      

      // Hanfle the file name for Database
      $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
      // move the file
      $request->image->move(public_path('storage/product'), $file_name);

      
    } else {
      $file_name = $getData->image;
    }
    
    
    
  
    
    
    $imageName2 = $getData->images;

    if ($request->hasFile('image')) {
      if (File::exists(public_path('storage/product/') . $imageName2)) {
        File::delete(public_path('storage/product/') . $imageName2);
      }
      

      // Hanfle the file name for Database
      $file_name2 = time() . Str::upper(Str::random(16)) . '.' . $request->images->extension();
      // move the file
      $request->images->move(public_path('storage/product'), $file_name2);
    } else {
      $file_name2 = $getData->images;
    }


    $imageName3 = $getData->img;

    if ($request->hasFile('image')) {
      if (File::exists(public_path('storage/product/') . $imageName3)) {
        File::delete(public_path('storage/product/') . $imageName3);
      }
      

      // Hanfle the file name for Database
      $file_name1 = time() . Str::upper(Str::random(16)) . '.' . $request->img->extension();
      // move the file
      $request->img->move(public_path('storage/product'), $file_name1);
    } else {
      $file_name1 = $getData->img;
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
          'category' =>$request->category,
          'description' =>$request->description,
          'product' =>$request->product,
          'stock_status' =>$request->stock_status,
          'featured' =>$request->featured,
          'quantity' =>$request->quantity,
          'return' =>$request->return,
          'SKU' =>$request->SKU,
          'color' =>$request->color,
          'authentic' =>$request->authentic,
          'warranty' =>$request->warranty,
          'tag' =>$request->tag,
          'size' =>$request->size,
          'regular_price' =>$request->regular_price,
          'sale_price' =>$request->sale_price,
          'sale_percent' =>$request->sale_percent,

          
          'color1' =>$request->color1,
          'color2' =>$request->color2,
          'color3' =>$request->color3,
          'color4' =>$request->color4,
          'color5' =>$request->color5,

          'size1' =>$request->size1,
          'size2' =>$request->size2,
          'size3' =>$request->size3,
          'size4' =>$request->size4,
          'size5' =>$request->size5,

          'size_details1' =>$request->size_details1,
          'size_details2' =>$request->size_details2,
          'size_details3' =>$request->size_details3,
          'size_details4' =>$request->size_details4,
          'size_details5' =>$request->size_details5,

          'topic1' =>$request->topic1,
          'topic2' =>$request->topic2,
          'topic3' =>$request->topic3,
          'topic4' =>$request->topic4,
          'topic5' =>$request->topic5,
          
          'topic_details1' =>$request->topic_details1,
          'topic_details2' =>$request->topic_details2,
          'topic_details3' =>$request->topic_details3,
          'topic_details4' =>$request->topic_details4,
          'topic_details5' =>$request->topic_details5,

          'image' =>$file_name,
          'img' =>$file_name1,
          'images' =>$file_name2,
          
        
         ];
      

      

          
    
        
   
        Product::findOrFail($id)->update($data);

        return redirect()->back()->with('message','Product updated successfully');
         
                 
    }
   
       

    
    
            public function show_product(){
        
                $product = product::all();
                return view('content.admin.pages.product.product_list',compact('product'));
            }
              

            public function my_product(){
    
    
                $user=Auth::user();
                $userid=$user->id;
                $product =product::Where('user_id','=',$userid)->get();
                
                
                return view('content.admin.pages.product.my_product',compact('product'));
            }
            

            public function product_all(){


              if(Auth::id())
              {
                $id=Auth::user()->id;
                $carts=cart::where('user_id','=' ,$id)->get();
                $total_cart=Cart::where('user_id','=' ,$id)->get()->count();

                $products = Product::all();
                $categories = Category::all();
                $nproducts = Product::Latest()->take(4)->get();


                
          
                $wishlists=Wishlist::where('user_id','=' ,$id)->get();
                $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();
                $total_product=Product::all()->count();
                $hero=Hero::first();
  
              
                return view('content.users.pages..product.product_show',compact('products','categories','nproducts','carts','total_cart','wishlists','total_wishlist','total_product','hero'));
              }
              else{
              
                $products = Product::all();
                $categories = Category::all();
                $nproducts = Product::Latest()->take(4)->get();
                $total_product=Product::all()->count();
                $hero=Hero::first();
  
              
                return view('content.users.pages..product.product_show',compact('products','categories','nproducts','total_product','hero'));
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


              // $products = Product::all();
              $categories = Category::all();
              $search_text=$request->search;
              $products=product::where('product','LIKE',"%$search_text%")->orWhere
              ('shop','LIKE',"%$search_text%")->orWhere
              ('category','LIKE',"%$search_text%")->paginate(10);

              $hero=Hero::first();
  



            
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
         


                 
            public function product_details($slug){


              if(Auth::id())
              {
                $id=Auth::user()->id;
                $carts=cart::where('user_id','=' ,$id)->get();
                $total_cart=Cart::where('user_id','=' ,$id)->get()->count();
                $wishlists=Wishlist::where('user_id','=' ,$id)->get();
                $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();


                $reviews=Review::where('product_id',$slug)->get();

         
 

                $product=Product::where('slug',$slug)->first();
                $nproducts = Product::Latest()->take(4)->get();

                $categories=Category::Latest()->take(8)->get();

                $total_review=Review::all()->count();


                // $products=Product::first();
                // $category=$products->category;
                // $rproducts= Product::where('category', $category)->inRandomOrder()->limit(4)->get();
                $rproducts= Product::where('category', $product->category)->inRandomOrder()->limit(4)->get();


                $comment=Comment::where('product_slug',$slug)->get();
                $reply=Reply::where('product_slug',$slug)->get();
                $hero=Hero::first();

                $shops=Shop::Latest()->take(8)->get();
                $nproducts = Product::Latest()->take(4)->get();
  

              
                return view('content.users.pages.product.product_details',compact('product','nproducts','reviews','carts',  'rproducts','total_cart','total_wishlist','wishlists','categories','total_review','comment','reply','hero','shops','nproducts'));
              }
              else{
              
              
                $reviews=Review::where('product_id',$slug)->get();
                $product=Product::where('slug',$slug)->first();
                $nproducts = Product::Latest()->take(4)->get();
                $hero=Hero::first();
  
  

                $categories=Category::Latest()->take(8)->get();
                $total_review=Review::all()->count();
                $rproducts= Product::where('category', $product->category)->inRandomOrder()->limit(4)->get();

                
                $comment=Comment::where('product_slug',$slug)->get();
                $reply=Reply::where('product_slug',$slug)->get();  
                
                $shops=Shop::Latest()->take(8)->get();
                $nproducts = Product::Latest()->take(4)->get();              
            
                  return view('content.users.pages.product.product_details',compact('product','nproducts','rproducts','reviews','categories','total_review','comment','reply','hero','shops','nproducts'));
               }


            
       
              }




           
        public function showProductsByCategory  ($category)
              {

                
        if(Auth::id())
        {
          $id=Auth::user()->id;
          $carts=cart::where('user_id','=' ,$id)->get();
          $total_cart=Cart::where('user_id','=' ,$id)->get()->count();

          
          $wishlists=Wishlist::where('user_id','=' ,$id)->get();
          $total_wishlist=Wishlist::where('user_id','=' ,$id)->get()->count();

          
          $categories=Category::Latest()->take(8)->get();
          $shops=Shop::Latest()->take(8)->get();


          $products=product::Latest()->take(8)->get();
          $nproducts = Product::Latest()->take(4)->get();

          $total_product=Product::all()->count();
          $hero=Hero::first();

     
  
          $products=Product::where('category',$category)->get();
          // dd($products);
        
          return view('content.users.pages.product.product_show_cate',compact('carts','total_cart','total_wishlist','wishlists','categories','shops','products','nproducts','total_product' ,'category','hero'));
        }
        else{


            $categories=Category::Latest()->take(8)->get();
            $shops=Shop::Latest()->take(8)->get();
            
            // $products=product::Latest()->take(8)->get();
            $nproducts = Product::Latest()->take(4)->get();
            $total_product=Product::all()->count();

            $hero=Hero::first();


           

             $products=Product::where('category',$category)->get();
                
     
            return view('content.users.pages.product.product_show_cate',compact('categories','shops','products','nproducts','total_product' ,'category','hero'));
         }
   
    }




               
          
            

        
}



