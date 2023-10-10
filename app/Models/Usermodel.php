<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usermodel extends Model
{
    use HasFactory;
    protected $table = 'user_managements';
    protected $fillable = [
        'background_image',
        'profile_picture',
        'mobile',
        'email',
        'firstname',
        'premium',
        'bgc_verified',
        'lastname',
        'address',

        'stripe_customer_id',
        'agora_id',

        'pincode',
        'city',
        'country',
        'status',
        'create_user',
        'update_user',
        'username',
        'birthday',
        'fcm_token',
        'registration_type',
        'user_id',
        'is_first_login'

    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];


    public function countryDetail()
    {
        return $this->belongsTo(Countrymodel::class, 'country', 'country_id');
    }

    public function getlikeprofile()
    {
        return $this->hasOne('App\Models\Likeprofilemodel', 'user_id', 'id');
    }

    public function getFullNameIdAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

}
