<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller 
{

    public function index()
    {
        // $all_posts = Post::paginate('12');
        // return view('home.welcom',compact('all_posts'));
    // $all_posts = Post::where('category_id', 3)->firstOrFail();
    $all_posts = Post::where('category_id', 1)->get();
    return view("home.welcom", compact('all_posts'));
    // return dd($all_posts);

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }
    public function show(){
    }

    public function about()
    {
        return view ('home.pages.about');
    }


    public function faq()
    {
        return view ('home.pages.faq');
    }


    public function policy()
    {
        return view ('home.pages.policy');
    }


    public function destroy($id)
    {
        //
    }
    
    public function display($title){
        $dis_posts = Post::where('title',$title)->first();
        return view ('home.components.pages.display',compact('dis_posts'));
    }
}
