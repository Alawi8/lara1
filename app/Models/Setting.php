<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = "Settings";
    protected $fillable = ['title', 'content', 'writer', 'user_id' , 'image_path', 'time' , 'date' , 'exept','created_at', 'updated_at'];
    // protected $hidden =['created_at', 'updated_at'];
    public $timeStamps = true ;

    public function category (){
        return $this->belongsTo(Category::class);
    }
}