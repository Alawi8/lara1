<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Middleware\CheckRole;

class CommetController extends Controller
{
    public function __construct(){
        $this->middleware([CheckRole::class , Authenticate::class]);
    }
    public function showForm($postId)
    {
        return view('home.components.pages.display', ['postId' => $postId]);
    }

    public function store(Request $request)
    {
        // افحص صحة الطلب

        $comment = new Comment([
            'content' => $request->input('content'),
            'post_id' => $request->input('post_id'),
        ]);

        $comment->save();

        return redirect()->route('posts.show', $request->input('post_id'))->with('success', 'تم إرسال التعليق بنجاح!');
    }    }    

