<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\category ;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
=     */
    public function index()
    {
        $post = Post::all();
        $arr = array('posts' => $post);
        // return dd($arr);
    return view('dash.components.photo.show', $arr );
    }

    /**
     * Show the form for creating a new resource.
     *
=     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
-
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
=     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        //
    }
}
