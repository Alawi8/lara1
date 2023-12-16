<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;
    protected $table = "categories";
    protected $fillable = ['name','title','img_url','id'];

    // You can add relationships or other model-specific methods here
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}