<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page ;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Str;


class PageController extends Controller
{
    use SEOToolsTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.components.pages.show');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($title)
    {
        $post = Page::where('title', $title)->firstOrFail();
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->description);
        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->description);
            // ->addImage(asset($post->image_path));
            
        return view('home.components.pages.show',compact('post'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
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
