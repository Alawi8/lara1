<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = "phones";
    protected $fillable = ['numper','user'];
    protected $timeStamps = true ;

    public function user (){
        return $this -> belongsTo ('App\Models\User' , 'user_id');
    }
}
