<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'email',
        'user_id',
        'sale_percent',
        'regular_price',
        'sale_price',
        'product',
        'product_id',
        'product_slug',
        'images',
        'image',
   
        ];
      
        protected $table = 'wishlists';


       
}
