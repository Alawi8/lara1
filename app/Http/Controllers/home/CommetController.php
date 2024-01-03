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
    public function __construct()
    {
        $this->middleware( Authenticate::class);
    }
    public function showForm($postId)
    {
            // Retrieve the post
    // $dis_posts = Post::find($postId);

    // Retrieve the comments associated with the post
    $comments = ['ss','dd'];
        // return view('home.layouts.including.display', compact('comments'));
    }

    public function store(Request $request)
    {
        // افحص صحة الطلب

        $comment = new Comment([
            'name' => auth()->user()->name,
            'body' => $request->input('body'),
            'post_id' => $request->input('post_id'),
        ]);

        $comment->save();

        return redirect()->back()->with('success', 'تم ارسال التعليق بنجاح ');
    }

}


