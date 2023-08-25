<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'email',
        'phone',
        'address',
        'user_id',
        'product',
        'product_id',
        'product_slug',
  
        'price',
        'color',
        'size',
        'product_title',
    
        'shop_slug',
        'shop',
        'shop_id',
    
    
        'quantity',
        'subtotal',
        'image',
   
        ];
      
        protected $table = 'carts';

      

        
}
