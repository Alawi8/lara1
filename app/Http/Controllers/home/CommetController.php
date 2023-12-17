<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Post;
use App\Models\Comment;

class CommetController extends Controller
{
    public function showForm($postId)
    {
        return view('home.components.pages.display', ['postId' => $postId]);
    }

    public function store(CommentRequest $request, $postId)
    {
        $comment = new Comment([
            'content' => $request->input('content'),
            'post_id' => $postId,
        ]);
    
        $comment->save();
    
        return redirect()->route('posts.show', $postId)->with('success', 'تم إرسال التعليق بنجاح!');
    }}
