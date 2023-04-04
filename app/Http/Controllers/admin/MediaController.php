<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post ;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    public function GetMedia(){
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        $post = Post::all();
        $arr = array('posts' => $post);
        dd($arr);
        return view('dash.components.pages.media', compact('arr'));
    }
}
