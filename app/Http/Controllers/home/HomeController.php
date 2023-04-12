<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller 
{

    public function index()
    {
        //
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
        $all_posts = Post::all();
        return view('home.welcom',['posts' => $all_posts]);
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
        return view ('home.pages.display',compact('dis_posts'));
    }
}
