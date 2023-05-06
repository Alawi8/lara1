<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }


    ###################### begin relation #####################
        public function phone (){
            return $this -> hasOne('App\Models\Phone' , 'user_id');
        }
    ###################### End relation #######################
    
    ###################### begin posts relation ###############
        public function post (){
            return $this -> hasMany('App\Models\Post' , 'user_id');
        }
    ###################### end posts relation #################
}
