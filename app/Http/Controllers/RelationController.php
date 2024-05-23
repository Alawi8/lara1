<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function relation (){
        $posts = Post::all();
        // // return  ;
        return response()-> json($posts);
    }
}
