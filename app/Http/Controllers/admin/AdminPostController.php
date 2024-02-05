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


class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::latest('date')->select('title', 'id', 'date','time','image_path','exept')->paginate(6);
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
            'exept' => 'required',
            'content' => 'required|max:75000',
            'image' => 'required|mimes:jpg,png,jpeg,webp|max:5048',
        ]);

        // حفظ الصورة في مجلد public/storage/img
        $time = time() . $request->name . '.' ;
        $newImageName = $time . $request->image->extension();
        
        $request->image->move(public_path('/storage/img'), $newImageName);

        // مسار الصورة الكامل
        $imageFullPath = public_path('/storage/img/' . $newImageName);

        // استخدام Intervention Image لضغط الصورة وتحويلها إلى WebP
        $image = Image::make($imageFullPath);
        $image->encode('webp', 35); // تحويلها إلى WebP بجودة 75%
        $image->resize(500, 350);

        // حفظ الصورة المحولة
        $webpPath = str_replace(['.jpg','.jpeg','.png'], '.webp', $imageFullPath);
        $image->save($webpPath);

        
        $imagePath = url('storage/img') . '/' . $time . 'webp';
        
        DB::table('posts')->insert([
            'title' => $request->title,
            'time' => date('Hms'),
            'date' => date('Y-m-d h:m:s') ,
            'user_id' => Auth::user()->id,
            'content' => $request->content,
            'writer' => Auth::user()->name,
            'exept' => $request->exept,
            'image_path' => $imagePath,
            'category_id' => $request->category,
        ]);
        unlink($imageFullPath);
        $baseUrl = config('app.url'); 
        SitemapGenerator::create($baseUrl)->writeToFile('sitemap.xml');

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
        return view('dash.components.posts.edit', compact('editing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image_path = $request->image_path;
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
