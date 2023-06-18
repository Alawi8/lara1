<?php

// namespace App\Http\Controllers;

// use App\Models\Category;
// use App\Models\Post;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;

// class PostController extends Controller
// {

//     public function index()
//     {
//         $posts = Post::with('category')->latest()->paginate(10);

//         return view('dash.components.post.index', compact('posts'));
//     }


//     public function create()
//     {
//         return view('dash.components.post.create')->with('categuries', Category::all());
//     }


//     public function store(Request $request)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'slug' => 'required|string|max:255',
//             'description' => 'required',
//             'category_id' => 'required|exists:App\Models\Category,id'
//         ]);
//         Post::create([
//             'title' => $request->title,
//             'slug' => Str::slug($request->slug),
//             'description' => $request->description,
//             'category_id' => $request->category_id,
//         ]);

//         return redirect()->route('posts.index')->with('status', 'Post Created Successfully');
//     }

//     public function show()
//     {
//         return view('dash.components.post.show', compact('post'));
//     }


//     public function edit(Post $post)
//     {
//         $categories = Category::all();

//         return view('dash.components.post.edit', compact('categories', 'post'));
//     }

//     public function update(Request $request, Post $post)
//     {
//         $request->validate([
//             'title' => 'required|string|max:255',
//             'slug' => 'required|string|max:255',
//             'description' => 'required',
//             'category_id' => 'required|exists:App\Models\Category,id',
//         ]);
//         $post->title = $request->title;
//         $post->slug = Str::slug($request->slug);
//         $post->description = $request->description;
//         $post->category_id = $request->category_id;
//         $post->save();

//         return redirect()->route('posts.index')->with('status', 'Post Updated Successfully');
//     }


//     public function destroy(Post $post)
//     {
//         $post->delete();

//         return redirect()->route('posts.destroy')->with('status', 'Post Delete Successfully');
//     }
// }