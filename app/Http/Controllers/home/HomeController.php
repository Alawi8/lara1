<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Artesaos\SEOTools\Traits\JsonLdMulti;



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

        $categories = Category::all();

        $all_posts = Post::select('title', 'image_path', 'date', 'id')->paginate(4);
        $totalPosts = Post::count();

        // Example: Retrieve a specific post (adjust the ID based on your use case)
        $specificPostId = 6;
        $dis_posts = Post::find($specificPostId);

        // Example: Retrieve comments associated with the specific post
        $comments = ($dis_posts) ? $dis_posts->comments : [];

        return view('home.welcom', compact('all_posts', 'categories', 'totalPosts', 'comments'));
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
        $post = Post::find($id);
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->exept);
        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->exept)
            ->addImage(asset($post->image_path)); // افتراضيًا، قم بتغييره وفقًا لكيفية تخزين الصور في مشروعك


        $dis_posts = Post::with('comments')->find($id);

        if (!$dis_posts) {
            abort(404);
        }

        $comments = $dis_posts->comments;

        return view('home.layouts.including.display', compact('dis_posts', 'comments'));
    }

}
