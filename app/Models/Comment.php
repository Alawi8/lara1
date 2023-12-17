<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content']; // حقول يمكن ملؤها

    /**
     * العلاقة "Many-to-One" مع جدول البوستات
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
