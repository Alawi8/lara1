<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        // if(isset(!$all_posts)){
        // $all_posts = Post::select('title', 'image_path', 'date')->paginate(8);
        // $totalPosts = Post::count();
        // return view('home.welcom',compact('all_posts','categories','totalPosts'));
        // }else{

        //     return view('home.welcom');
        // }


        if (!isset($all_posts)) {
            $all_posts = Post::select('title', 'image_path', 'date','id')->paginate(8);
            $totalPosts = Post::count();

            return view('home.welcom', compact('all_posts', 'categories', 'totalPosts'));
        } else {
            return view('home.welcom', compact('categories'));
        }

    }


    public function store(Request $request)
    {
        //
    }
    public function search(Request $request, $title)
    {

        $result = Post::where('title', 'like', '%' . $title . '%')->get();

        return view('home.components.pages.search', compact('result'));

    }

    public function about()
    {
        return view('home.pages.about');
    }


    public function faq()
    {
        return view('home.pages.faq');
    }


    public function policy()
    {
        return view('home.pages.policy');
    }


    public function destroy($id)
    {
        //
    }

    public function display($id)
    {
        $dis_posts = Post::where('id', $id)->first();

        if (!$dis_posts) {
            abort(404);
        }

        return view('home.layouts.including.display', compact('dis_posts'));
    }

}
