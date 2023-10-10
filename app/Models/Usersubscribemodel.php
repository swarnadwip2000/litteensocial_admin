<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usersubscribemodel extends Model
{
    use HasFactory;
    protected $table = 'user_subscribe';
    protected $fillable = [
        'user_id',
        'subscribe_id',
        'transaction_id',
        'description',
        'subscribe_title',
        'subscribe_price',
        'exp_date',
        'status',
        'create_user',
        'update_user'
    ];

    public function user()
    {
        return $this->belongsTo(Usermodel::class);
    }

    public function subscribe()
    {
        return $this->belongsTo(Subscribemodel::class);
    }

}
