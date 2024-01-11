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
        $this->seo()->setTitle('الرئيسيه ');
        $this->seo()->setDescription('مشكاه هي منصة تقنية مبتكرة تهدف إلى تحسين وتسهيل العمليات التقنية. تتميز المنصة بمجموعة واسعة من الخدمات والأدوات التي تدعم مطوري البرمجيات ورواد الأعمال في تحقيق أهدافهم بشكل فعال');
        $this->seo()->opengraph()->setUrl('http://meshcah.net/home');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->twitter()->setSite('@LuizVinicius73');
        $this->seo()->jsonLd()->setType('Article');

        // category methods for articles 
        $categories = Category::all();
        $all_posts = Post::select('title', 'image_path', 'date', 'id')
        ->orderBy('date', 'desc') // ترتيب النتائج من الأحدث إلى الأقدم بناءً على حقل التاريخ
        ->paginate(8);        $totalPosts = Post::count();
        return view('home.welcom', compact('all_posts', 'categories', 'totalPosts'));
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


    public function pages($id)
    {
        $post = Page::find($id);
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->exept);
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

    public function display($id)
    {
        # seo optimization for home/including/page 
        $post = Post::find($id);
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->exept);
        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->exept)
            ->addImage(asset($post->image_path));

        $dis_posts = Post::with('comments')->find($id);
        // 
        if (!$dis_posts) {
            abort(404);
        }

        $comments = $dis_posts->comments;

        return view('home.layouts.including.display', compact('dis_posts', 'comments'));
    }
}
