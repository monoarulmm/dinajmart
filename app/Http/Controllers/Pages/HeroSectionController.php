<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\Hero;

class HeroSectionController extends Controller
{
    public function hero_pages(){
      $user=Auth()->user();
      $heroes=Hero::all();


      
    
        return view('content.admin.pages.Hero.hero_pages',compact('user','heroes'));
    }


 
    public function add_hero(Request $request)
    {

      $request->validate([
            
                 
        'text1' => 'string|required',
 
        'image' => 'image|file|required|max:5120',
        'images' => 'image|file|required|max:5120',
        'img' => 'image|file|required|max:5120',
        'banner1' => 'image|file|required|max:5120',
        'banner2' => 'image|file|required|max:5120',
        'banner3' => 'image|file|required|max:5120',
        'logo_d' => 'image|file|required|max:5120',
        'logo_m' => 'image|file|required|max:5120',
        'paymentimg' => 'image|file|required|max:5120',
     
        
     ],
     
     
     [
        
        'text1.string ' => 'titltext1 Mustbe a string ',
        'text1.required ' => 'text1 Mustbe a required ',
      


        
    
               
         ]
     );
    

        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $email=$user->email;
        $phone=$user->phone;
        $address=$user->address;
     
 
    
         // image file name
         $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
         // move the  image
         $request->image->move(public_path('storage/hero'), $file_name);

         // img file name1
         $file_name1 = time() . Str::upper(Str::random(16)) . '.' . $request->img->extension();
         // move the  image
         $request->img->move(public_path('storage/hero'), $file_name1);




         // image file name
         $file_name2 = time() . Str::upper(Str::random(16)) . '.' . $request->images->extension();
         // move the  image
         $request->images->move(public_path('storage/hero'), $file_name2);

         // image file name
         $file_name3 = time() . Str::upper(Str::random(16)) . '.' . $request->logo_d->extension();
         // move the  image
         $request->logo_d->move(public_path('storage/hero'), $file_name3);

         

         // image file name
         $file_name4 = time() . Str::upper(Str::random(16)) . '.' . $request->logo_m->extension();
         // move the  image
         $request->logo_m->move(public_path('storage/hero'), $file_name4);


         // image file name
         $file_name5 = time() . Str::upper(Str::random(16)) . '.' . $request->banner1->extension();
         // move the  image
         $request->banner1->move(public_path('storage/hero'), $file_name5);

         // image file name
         $file_name6= time() . Str::upper(Str::random(16)) . '.' . $request->banner2->extension();
         // move the  image
         $request->banner2->move(public_path('storage/hero'), $file_name6);

         // image file name
         $file_name7 = time() . Str::upper(Str::random(16)) . '.' . $request->banner3->extension();
         // move the  image
         $request->banner3->move(public_path('storage/hero'), $file_name7);


         // image file name
         $file_name8 = time() . Str::upper(Str::random(16)) . '.' . $request->paymentimg->extension();
         // move the  image
         $request->paymentimg->move(public_path('storage/hero'), $file_name8);
    
    
         $data = [
      
       
          'name' =>$name,
          'email' =>$email,
          'user_id' =>$userid,
          'phone' =>$phone,
          'address' =>$address,


        
          'text1' =>$request->text1,
          'text2' =>$request->text2,

          'hotline' =>$request->hotline,

          'line1' =>$request->line1,
          'line2' =>$request->line2,
          'line3' =>$request->line3,
          'line4' =>$request->line4,
          'line5' =>$request->line5,
          'line6' =>$request->line6,
          'line7' =>$request->line7,
          'line8' =>$request->line8,
          'line9' =>$request->line9,
          'line10' =>$request->line10,
          'line11' =>$request->line11,
          'line12' =>$request->line12,

        
          'link1' =>$request->link1,
          'link2' =>$request->link2,
          'link3' =>$request->link3,
          'link4' =>$request->link4,
          'app_status' =>$request->app_status,



  
          'image' =>$file_name,
          'img' =>$file_name1,
          'images' =>$file_name2,
          'logo_d' =>$file_name3,
          'logo_m' =>$file_name4,
          'banner1' =>$file_name5,
          'banner2' =>$file_name6,
          'banner3' =>$file_name7,
          'paymentimg' =>$file_name8,
      
          
        
         ];
      

     
      
      
          Hero::create($data);
      


      return redirect()->back()->with('message','Hero-added successfully');
    }
    
    


  
        
        
        public function update_hero($id)
        {
    

        
              $hero=hero::find($id);

              $user=Auth::user();
       

            return view('content.admin.pages.Hero.hero_update_pages', compact('hero','user'));
                
            }
            
            

            public function update_hero_confirm(Request $request,  $id)
            {
              
              $request->validate([
            
                 
                'text1' => 'string|required',
         
                'image' => 'image|file|required|max:5120',
                'images' => 'image|file|required|max:5120',
                'img' => 'image|file|required|max:5120',
                'banner1' => 'image|file|required|max:5120',
                'banner2' => 'image|file|required|max:5120',
                'banner3' => 'image|file|required|max:5120',
                'logo_d' => 'image|file|required|max:5120',
                'logo_m' => 'image|file|required|max:5120',
                'paymentimg' => 'image|file|required|max:5120',
             
                
             ],
             
             
             [
                
                'text1.string ' => 'titltext1 Mustbe a string ',
                'text1.required ' => 'text1 Mustbe a required ',
              
        
        
                
            
                       
                 ]
             );
            

                             
        $get_data = Hero::where('id', $id)->first();
        $image_name =  $get_data->image;
        $image_name1 =  $get_data->img;
        $image_name2 =  $get_data->images;
        $image_name3 =  $get_data->logo_m;
        $image_name4 =  $get_data->logo_d;
        $image_name5 =  $get_data->banner1;
        $image_name6=  $get_data->banner2;
        $image_name7 =  $get_data->banner3;
        $image_name8 =  $get_data->paymentimg;

     
    
  
// imge---------------1_start
    if ($request->hasFile('image')) {
      if (File::exists(public_path('storage/hero/') . $image_name)) {
        File::delete(public_path('storage/hero/') . $image_name);
      }
      

      // Hanfle the file name for Database
      $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
      // move the file
      $request->image->move(public_path('storage/hero'), $file_name);

      
    } else {
      $file_name = $get_data->image;
    }
    
// imge_____________1-End


  
// imge---------------2_start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name1)) {
    File::delete(public_path('storage/hero/') . $image_name1);
  }
  

  // Hanfle the file name for Database
  $file_name1 = time() . Str::upper(Str::random(16)) . '.' . $request->img->extension();
  // move the file
  $request->img->move(public_path('storage/hero'), $file_name1);

  
} else {
  $file_name1 = $get_data->img;
}

// imge_____________2-End


// imge---------------3_start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name2)) {
    File::delete(public_path('storage/hero/') . $image_name2);
  }
  

  // Hanfle the file name for Database
  $file_name2 = time() . Str::upper(Str::random(16)) . '.' . $request->images->extension();
  // move the file
  $request->images->move(public_path('storage/hero'), $file_name2);

  
} else {
  $file_name2 = $get_data->images;
}

// imge_____________3-End


// imge---------------4-start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name3)) {
    File::delete(public_path('storage/hero/') . $image_name3);
  }
  

  // Hanfle the file name for Database
  $file_name3 = time() . Str::upper(Str::random(16)) . '.' . $request->logo_d->extension();
  // move the file
  $request->logo_d->move(public_path('storage/hero'), $file_name3);

  
} else {
  $file_name3 = $get_data->logo_d;
}

// imge_____________4-End


// imge---------------5-start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name4)) {
    File::delete(public_path('storage/hero/') . $image_name4);
  }
  

  // Hanfle the file name for Database
  $file_name4 = time() . Str::upper(Str::random(16)) . '.' . $request->logo_m->extension();
  // move the file
  $request->logo_m->move(public_path('storage/hero'), $file_name4);

  
} else {
  $file_name4 = $get_data->logo_m;
}

// imge_____________5-End

// imge---------------6-start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name5)) {
    File::delete(public_path('storage/hero/') . $image_name5);
  }
  

  // Hanfle the file name for Database
  $file_name5 = time() . Str::upper(Str::random(16)) . '.' . $request->banner1->extension();
  // move the file
  $request->banner1->move(public_path('storage/hero'), $file_name5);

  
} else {
  $file_name5 = $get_data->banner1;
}

// imge_____________6-End


// imge---------------7-start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name6)) {
    File::delete(public_path('storage/hero/') . $image_name6);
  }
  

  // Hanfle the file name for Database
  $file_name6 = time() . Str::upper(Str::random(16)) . '.' . $request->banner2->extension();
  // move the file
  $request->banner2->move(public_path('storage/hero'), $file_name6);

  
} else {
  $file_name6 = $get_data->banner2;
}

// imge_____________7-End




// imge---------------8-start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name7)) {
    File::delete(public_path('storage/hero/') . $image_name7);
  }
  

  // Hanfle the file name for Database
  $file_name7 = time() . Str::upper(Str::random(16)) . '.' . $request->banner3->extension();
  // move the file
  $request->banner3->move(public_path('storage/hero'), $file_name7);

  
} else {
  $file_name7 = $get_data->banner3;
}

// imge_____________8-


  
// imge---------------9-start
if ($request->hasFile('image')) {
  if (File::exists(public_path('storage/hero/') . $image_name8)) {
    File::delete(public_path('storage/hero/') . $image_name8);
  }
  

  // Hanfle the file name for Database
  $file_name8 = time() . Str::upper(Str::random(16)) . '.' . $request->paymentimg->extension();
  // move the file
  $request->paymentimg->move(public_path('storage/hero'), $file_name8);

  
} else {
  $file_name8 = $get_data->paymentimg;
}

// imge_____________9-End
  
    
 

 

        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $email=$user->email;
        $phone=$user->phone;
        $address=$user->address;
        
        $data = [
      
       
          'name' =>$name,
          'email' =>$email,
          'user_id' =>$userid,
          'phone' =>$phone,
          'address' =>$address,



        
          'text1' =>$request->text1,
          'text2' =>$request->text2,

          'hotline' =>$request->hotline,

          'line1' =>$request->line1,
          'line2' =>$request->line2,
          'line3' =>$request->line3,
          'line4' =>$request->line4,
          'line5' =>$request->line5,
          'line6' =>$request->line6,
          'line7' =>$request->line7,
          'line8' =>$request->line8,
          'line9' =>$request->line9,
          'line10' =>$request->line10,
          'line11' =>$request->line11,
          'line12' =>$request->line12,

        
          'link1' =>$request->link1,
          'link2' =>$request->link2,
          'link3' =>$request->link3,
          'link4' =>$request->link4,
          'app_status' =>$request->app_status,



  
          'image' =>$file_name,
          'img' =>$file_name1,
          'images' =>$file_name2,
          'logo_d' =>$file_name3,
          'logo_m' =>$file_name4,
          'banner1' =>$file_name5,
          'banner2' =>$file_name6,
          'banner3' =>$file_name7,
          'paymentimg' =>$file_name8,
      
          
        
         ];
      

      

          
    
        
   
        Hero::find($id)->update($data);

        return redirect()->back()->with('message','Hero updated successfully');
         
                 
    }
   
       

}
