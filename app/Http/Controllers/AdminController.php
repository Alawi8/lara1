<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function header()
    {
        return view ('dash.layouts.header');
    }

    public function create()
    {
        return view ('dash.components.posts.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            //blade data in db
            'title' => 'required',
            'content' => 'required|max:25000',
            'image'=> 'required|mimes:jpg,png,jpeg|max:5048',
            
        ]);
        $newImageName = time() . '-' . $request->name . '.' .
        $request->image->extension();

        $request->image->move(public_path('/assets/img/offers'),$newImageName);
           

        DB::table('posts')->insert ([
            'title' => $request->title,
            'time'  => $request->time,
            'date'  => $request->date,
            'content' => $request->content,
            // 'writer' => $request->writer,
            'image_path'=> $newImageName ,
        ]);
        return redirect()->route('dash.display');
    }

    public function display()
    {
        $post = Post::all();
        $arr = array('posts' => $post);
        // dd($arr);
        return view('dash.components.posts.display',$arr );

    }
    public function edit($id)
    {
        $editing = Post::where('id',$id)->first();
        // dd($editing);
        return view ('dash.components.posts.edit',compact('editing'));
    //    return view('dash.components.posts.edit');
    }
    public function update(Request $request, $id)
    {
        $postsUpdate = Post::find($id);
        $postsUpdate->title = $request->title;
        $postsUpdate->content = $request->content;
        $postsUpdate->save();
        return redirect (route('dash.display'));
    }
    public function destroy($id)
    {
        return view ("");
    }

    public function dashboard(){
        return view ('dash.components.pages.dash');
    }
    public function profile(){
        return view ('dash.components.pages.profile');
    }

    public function navigation (){
        return view('dash.components.pages.navigation');
    }

}