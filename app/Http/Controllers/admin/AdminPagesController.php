<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use SebastianBergmann\Type\TypeName;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     **/
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show()
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        $post = Post::all();
        $arr = array('posts' => $post);
        // dd($arr);
        return view('dash.components.pages.media', $arr);
        // date_default_timezone_set("saudiArabia/makkah");
        // echo "The time is " . date("h:i:sa");
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