<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ['id','title', 'content', 'writer', 'user_id', 'image_path', 'time', 'date', 'exept'];
    protected $hidden = ['created_at', 'updated_at'];
    public $timestamps = true;
    

    public function category()
    {
        return $this->belongsTo(Category::class)->cascadeOnDelete();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
