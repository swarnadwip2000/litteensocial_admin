<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactionmodel extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = [
        'amount',
        'payment_method',
        'user_id',        
        'subscribe_title',    
        'orderid',   
        'status',     
        'create_user',        
        'update_user',
      

    ];
   
    
}
