<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;
use App\Http\Controllers\admin\ShellCommandFailedException ;


class AdminController extends Controller
{


    public function create()
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        return view('dash.components.posts.create')->with('categuries',Category::all());
    }


    //store function work to adding information to DataBase 
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
        $newImageName = time() . '-' . $request->name . '.' .
        $request->image->extension();
        $request->image->move(public_path('/assets/img/offers'), $newImageName);
        DB::table('posts')->insert([
            'title' => $request->title,
            'time' => $request->time,
            'date' => $request->date,
            'user_id'=> Auth::user()->id ,
            'content' => $request->content,
            'writer' => $request->writer,
            'exept' => $request->exept,
            'image_path' => asset('/assets/img/offers') . '/' . $newImageName,
            'category_id'=> $request->category ,
        ]);
        return redirect()->route('dash.display');
    }

    /* The display function displays the data in 
    dash.component.posts.display page .*/
    public function display()
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        $post = Post::all();
        $arr = array('posts' => $post);
        return view('dash.components.posts.display', $arr);

    }
    public function edit($id)
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        $editing = Post::where('id', $id)->first();
        return view('dash.components.posts.edit', compact('editing'));
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        $postsUpdate = Post::find($id);
        $postsUpdate->title = $request->title;
        $postsUpdate->content = $request->content;
        $postsUpdate->image_path = $request->image_path;
        $postsUpdate->save();
        return redirect(route('dash.display'));
    }

    public function destroy($id)
    {
        // return view ("");
    }

    public function dashboard()
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        return view('dash.components.pages.home');
    }

    
    public function profile()
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        $post = Post::all();
        $arr = array('posts' => $post);
        return view('dash.components.pages.profile', $arr);
    }

    public function header()
    {
        if (Auth::user()->role == 0) {
            return redirect('/');
        }
        return view('dash.layouts.header');
    }
}