<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements MustVerifyEmail
{
    /** The attributes that are mass assignable.*/

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }


    # begin relation 
        public function phone (){
            return $this -> hasOne('App\Models\Phone' , 'user_id');
        }
    # End relation 
    
    # begin posts relation 
        public function post (){
            return $this -> hasMany('App\Models\Post' , 'user_id');
        }
    # end migrations 
    public function isAdmin()
    {
        return $this->status == 'admin';
    }
}
