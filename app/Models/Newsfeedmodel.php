<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsfeedmodel extends Model
{
    use HasFactory;

    protected $table = 'news_feed_tbl';
    protected $fillable = [
        'user_id',
        'news_type',
        'file',
        'description',
        'visible_type',
        'parent_id',
        'tag', 
        'file_type',
        'thumbnail',       
        'status',       
        'create_user',        
        'update_user'

    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
}
