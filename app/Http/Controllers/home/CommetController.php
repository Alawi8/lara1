<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;


class CommetController extends Controller
{
    public function __construct()
    {
        $this->middleware( Authenticate::class);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $comment = new Comment([
            'name' => auth()->user()->name,
            'body' => $request->input('body'),
            'post_id' => $request->input('post_id'),
        ]);
    
        $comment->save();
    
        return redirect()->back()->with('success', 'تم إرسال التعليق بنجاح');
    }

}


