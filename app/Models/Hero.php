<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
  
    protected $fillable = [
        
        'name' ,
        'email',
        'user_id',
        'phone',
        'address',

        'text1',
        'text2',

        'hotline',

        'line1',
        'line2',
        'line3',
        'line4',
        'line5',
        'line6',
        'line7',
        'line8',
        'line9',
        'line10',
        'line11',
        'line12',


      
        'link1',
        'link2',
        'link3',
        'link4',


        'image',
        'img' ,
        'images',
        'logo_d',
        'logo_m',
        'banner1',
        'banner2',
        'banner3',
        'paymentimg',
        'app_status',
    

       


        
   
        ];
      
        protected $table = 'heroes';
}
