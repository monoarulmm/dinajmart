<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name' ,
        'email',
        'user_id',
        'title' ,
        'slug',
        'shop',
        'shop_slug',
        'shop_id',
        'category',

        'SKU',
        'product',
        'stock_status',
        'featured',
        'quantity',
        'return',
        'warranty',
        'authentic',
        'tag',
        'regular_price',
        'sale_price',
        'sale_percent',
        'description',
        'image',
        'img',
        'images',

        'color1',
        'color2',
        'color3',
        'color4',
        'color5',

        'size1',
        'size2',
        'size3',
        'size4',
        'size5',

        'size_details1',
        'size_details2',
        'size_details3',
        'size_details4',
        'size_details5',



        'topic1',
        'topic2',
        'topic3',
        'topic4',
        'topic5',
        
        'topic_details1',
        'topic_details2',
        'topic_details3',
        'topic_details4',
        'topic_details5',



        
   
        ];
      
        protected $table = 'products';
                   
 
 

    
    use Sluggable;

    public function Sluggable():array
    {
        return[
            'slug'=>
            [
                'source'=> 'product'
            ]
        ];
    }


    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }

}


