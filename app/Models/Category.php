<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContracts;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model {
    protected $table = 'categuries';
    protected $fillable = ['name'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
