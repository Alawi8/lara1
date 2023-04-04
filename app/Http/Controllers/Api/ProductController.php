<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'posts' => $posts ,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }
    public function destroy()
    {
        //
    }
}
