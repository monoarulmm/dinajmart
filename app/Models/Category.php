<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    // use Sluggable;


    // public function Sluggable():array
    // {
    //     return[
    //         'slug'=>
    //         [
    //             'source'=> 'category'
    //         ]
    //     ];
    // }

    use HasFactory;

    protected $fillable = [
        
        'name' ,
        'email',
        'user_id',

        'category',
        // 'slug',
        'image',
        
   
        ];
      
        protected $table = 'categories';

        // public function products()
        // {
        //     return $this->belongsToMany(Product::class);
        // }

    // Define the relationship with the Product model
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
