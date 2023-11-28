<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Category ;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        $arr = array('posts' => $post);
        return view('dash.components.posts.display', $arr);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.components.posts.create')->with('categuries',category::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        $validated = $request->validate([
            //blade data in db
            'title' => 'required',
            'exept' => 'required',
            'content' => 'required|max:25000',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',

        ]);
        
        //These instructions are responsible for saving images in public/assets/img/offers folder
        $newImageName = time() . $request->name . '.' .
        $request->image->extension();
        $request->image->move(public_path('../storage/img'), $newImageName);
        DB::table('posts')->insert([
            'title' => $request->title,
            'time' => $request->time,
            'date' => $request->date,
            'user_id'=> Auth::user()->id ,
            'content' => $request->content,
            'writer' => $request->writer,
            'exept' => $request->exept,
            'image_path' => asset('/storage/img') . '/' . $newImageName,
            'category_id'=> $request->category ,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('dash.components.pages.home');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $editing = Post::where('id', $id)->first();
        return view('dash.components.posts.edit', compact('editing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $postsUpdate = Post::find($id);
        $postsUpdate->title = $request->title;
        $postsUpdate->content = $request->content;
        $postsUpdate->image_path = $request->image_path;
        $postsUpdate->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $editing = Post::where('id', $id)->delete();
        return redirect()->route('posts.index');
        
    }
}
