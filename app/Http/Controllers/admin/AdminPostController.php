<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Intervention\Image\Facades\Image;
use Spatie\Sitemap\SitemapGenerator;
use App\Models\Setting;

use function Pest\Laravel\post;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::latest('created_at')->select('title', 'img_url','id','category_id','created_at','updated_at')->paginate(6);
        $arr = array('posts' => $post);
        return view('dash.components.posts.display', $arr);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dash.components.posts.create')->with('categuries', category::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|regex:/^[\p{Arabic}a-zA-Z0-9\s]+$/u',
            'slug' => 'required',
            'content' => 'required|max:75000',
            'img_url' => 'required|mimes:jpg,png,jpeg,webp|max:5048',
        ]);
        $time = time() . $request->name . '.' ;
        $newImageName = $time . $request->img_url->extension();
        # create the img , compress , and move to folder 
        $request->img_url->move(public_path('/storage/img'), $newImageName);
        $imageFullPath = public_path('/storage/img/' . $newImageName);
        $image = Image::make($imageFullPath);
        $image->encode('webp', 75);
        $image->resize(1024, 550);
        $webpPath = str_replace(['.jpg','.jpeg','.png'], '.webp', $imageFullPath);
        $image->save($webpPath);
        $imagePath = url('storage/img') . '/' . $time . 'webp';
        
        Post::create([
            'title' => $request->title,
            'user_id' => Auth::user()->id,
            'content' => $request->content,
            'slug' => $request->slug,
            'img_url' => $imagePath,
            'category_id' => $request->category,
            'url'=> 'url-is-empty-now',
        ]);
        unlink($imageFullPath);

        return redirect()->route('posts.index')->with('success', 'كفوو .. كتبت مقاله جديده استمر');
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
        $categories = Category::all();
        return view('dash.components.posts.edit', compact('editing','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->img_url = $request->img_url;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $editing = Post::where('id', $id)->delete();
        return redirect()->route('posts.index')->with('success', 'تم حذف المقاله');
        ;
    }
}
