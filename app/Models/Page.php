<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    
    // fillable models
    protected $fillable = ['title', 'description', 'content'];

    // enabled time format ;
    public $timestamps = true;
}
