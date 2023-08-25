<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'note' ,
        'payment_status' ,
        'without_dinajpur' ,
        'diff_address' ,
        'courier' ,
        'courier_amount' ,
    
        ];
      
    protected $table = 'orders';
    use Notifiable;


}
