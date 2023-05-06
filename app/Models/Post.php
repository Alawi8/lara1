<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['title', 'content', 'writer', 'user_id' , 'image_path', 'time' , 'date' , 'exept'];
    protected $hidden =['created_at', 'updated_at'];
    public $timeStamps = true ;
}
