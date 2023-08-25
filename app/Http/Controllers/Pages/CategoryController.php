<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CategoryController extends Controller
{
    public function category_page(){

      $user=Auth::user();
      $userid=$user->id;
      $categories=category::all();
      // $categories =category::Where('user_id','=',$userid)->get();

          // $user = User::where('utype', '=', 'ADM')->first();
          // $user->assignRole('sub-admin');
          //   $role = Role::where('name', 'sub-admin')->first();
          //   $role->givePermissionTo('edit');
        //   foreach ($users as $user) {
        //     $user->assignRole('sub-admin');
       
        // }
        
        // $role = Role::where('name', 'sub-admin')->first();

       
// $role = Role::where('name', 'sub-admin')->first();
// $role->givePermissionTo('edit');


// $permission = Permission::where('name', 'some_edit')->first();

// if (!$permission) {
//     // Handle the case where the permission does not exist
  
// }
// $user->givePermissionTo('some_edit');



  // $role = Role::where('name', 'sub')->first();
  // $role->givePermissionTo('vendor_edit');

//  $role = Role::where('name', 'sub-admin')->first();
//     $role->givePermissionTo('some-edit');
  // $permission = [

  // ['name'=> 'some-edit']

  // ];
  // foreach($permission as $item)
  // {
  //   Permission::create($item);
  // }


  $users = User::where('utype', '=', 'ADM')->get();
  foreach ($users as $user) {
      $user->assignRole('sub-admin');
       
  
        }

  // $role->givePermissionTo('some-edit');
  // $role->syncpermissions(Permission::all());

      if (!Auth::check() || !Auth::user()->hasRole('sub-admin')) {
      return redirect()->route('home');
  }




        return view('content.admin.pages.categories.category_pages',compact('categories','user'));
    }
    
    public function add_category(Request $request)
    {

        $request->validate([
            
                 
            'category' => 'string|required',
            'image' => 'image|file|required|max:5120',

            
         ],
         
         
         [
            
            ' category.string ' => ' category Mustbe a string ',
            ' category.required ' => ' category Mustbe a required ',
          
    
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
             $request->image->move(public_path('storage/category'), $file_name);
        
        
             $data = [
          
               'name' =>$name,
               'email' =>$email,
               'user_id' =>$userid,

        
               'category' =>$request->category,
               'image' =>$file_name,
            
             ];
          

         
          
          
          category::create($data);
        


            return redirect()->back()->with('message','category-added successfully');
    }
    
    


    
    public function delete_category($id)
    {

        $category=category::find($id);


        $image_path =public_path('storage/category/'.$category->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        
        
        $category->delete();

        return redirect()->back()->with('message','category deleted successfully');
            
        }
        
        
        
        public function update_category($id)
        {
    

           
        $category=category::find($id);

            return view('content.admin.pages.categories.category_update', compact('category'));
                
            }
            
            

            public function update_category_confirm(Request $request,  $id)
            {
                $request->validate([
            
                 
            'category' => 'string|required',
            'image' => 'image|file|required|max:10240',
    
            
         ],
         
         
         [
            
            'category.string ' => 'category Mustbe a string ',
            'category.required ' => 'category Mustbe a required ',
            
        
            'image.file' => 'file must be type of file',
            'image.image' => 'file must be image',
            'image.required' => 'you must choose a file',
            'image.size' => 'max file size id 10240KB',
            
        
                   
             ]
         );


 
                  
        $get_data = category::where('id', $id)->first();
        $image_name =  $get_data->image;
     
      
      
      
        if($request->hasFile('image')){
      
          if(File::exists(public_path('storage/category/') . $image_name)){
            File::delete(public_path('storage/category/') . $image_name);
      
          }
      
      
        // image file name
           $file_name = time() . Str::upper(Str::random(16)) . '.' . $request->image->extension();
        // move the  image
           $request->image->move(public_path('storage/category'), $file_name);
      
        }else{
          $file_name = $get_data->image;
        }
      
      
    

      $data = [
          
        'category' =>$request->category,
        'image' =>$file_name,
     
      ];
   

  
   
   
       category::findOrFail($id)->update($data);


                
        
                
         
                
     return redirect()->back()->with('message','category updated successfully');
      
              
            }

    
    

  
                 
                
            public function category_details($slug){

             
              $categories=Category::where('slug',$slug)->first();

                return view('content.users.pages.category.category_details',compact('category'));
              }




              public function category_search(Request $request)
              {
                // $categories = Category::all();
                $user=user::first();
                $search_text=$request->search;
                $categories=Category::where('name','LIKE',"%$search_text%")->orWhere
                ('category','LIKE',"%$search_text%")->paginate(10);
          
                  return view('content.admin.pages.categories.category_pages', compact('categories','user'));
              }
}
