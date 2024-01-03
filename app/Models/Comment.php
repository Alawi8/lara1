<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['name','body', 'post_id', 'user_id'];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
