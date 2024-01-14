<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Traits\JsonLdMulti;
use Illuminate\Support\Facades\View;




class HomeController extends Controller
{
    use SEOToolsTrait;
    // use JsonLdMulti;

    public function index()
    {
        # update title with description 
        $this->seo()->setTitle('الرئيسية ');
        $this->seo()->setDescription('مشكاه هي منصة تقنية مبتكرة تهدف إلى تحسين وتسهيل العمليات التقنية. تتميز المنصة بمجموعة واسعة من الخدمات والأدوات التي تدعم مطوري البرمجيات ورواد الأعمال في تحقيق أهدافهم بشكل فعال');
        
        # update SEO service 
        $this->seo()->opengraph()->setUrl('http://meshcah.net/home');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('@alo0o0o01');
        $this->seo()->jsonLd()->setType('Article');
    
        // category methods for articles 
        $categories = Category::all();
        
        # select posts 
        $all_posts = Post::select('title', 'image_path', 'date', 'id')
        ->orderBy('date', 'desc') 
        ->paginate(8);  
        
        # return array to welcome page 
        return view('home.welcom', compact('all_posts', 'categories'));
    }
    



    public function store(Request $request)
    {
        //
    }
    public function search(Request $request)
    {
        # validate query 
        $request->validate([
            'query'=> 'required'
        ]);
        
        # query parameters
        $q = $request->input('query'); 
        
        # get results from Post model
        $result = Post::where('title', 'like', '%' . $q . '%')
        ->orWhere('exept', 'like', '%' . $q . '%')
        ->paginate(8);
        
        return view('home.components.pages.search', compact('result'));
    }
    
    public function pages($id)
    {
        $post = Page::find($id);
        
        # update seo service in pages 
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->exept);
        # update seo service 
        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->exept)
            ->addImage(asset($post->image_path));
            
        return view ('home.components.pages.show',compact('pages'));
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
    public function display($title)
    {
        $title = str_replace('_',' ',$title);
        # seo optimization for home/including/page 
        $post = Post::where('title', $title)->firstOrFail();
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->exept);
    
        # CREATE SEO SERVICES 
        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->exept)
            ->addImage(asset($post->image_path));
    
        # GET COMMENT BY TITLE 
        $dis_posts = Post::with('comments')->where('title', $title)->first();
    
        if (!$dis_posts) {
            abort(404);
        }
        
        $comments = $dis_posts->comments ?? [];
        
        return view('home.layouts.including.display', compact('dis_posts', 'comments'));
    }
    

}
