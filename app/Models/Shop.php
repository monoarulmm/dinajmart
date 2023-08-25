<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


// composer require cviebrock/eloquent-sluggable
class Shop extends Model
{
    use HasFactory;
    
    protected $fillable = [
        
        'name' ,
        'email',
        'user_id',
        'location',
        'description',
        'owner',


        'title' ,
        'slug',
        'shop',
        'image',
        
   
        ];
      
        protected $table = 'shops';



    use Sluggable;


    public function Sluggable():array
    {
        return[
            'slug'=>
            [
                'source'=> 'shop'
            ]
        ];
    }
}
