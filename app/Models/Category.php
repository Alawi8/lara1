<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContracts;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContracts
{
    use Translatable;
    use HasFactory;

    public $translatable = ['title', 'content'];
    protected $fillable = ['id' , 'image_path' , 'parent_id' , 'created_at' , 'updated_at' ];
}
