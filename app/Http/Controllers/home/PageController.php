<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Page ;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;



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
        $url = str_replace('_', ' ', $post->title);
        return view('home.components.pages.show',compact('post', 'url'));
    }
    

}
