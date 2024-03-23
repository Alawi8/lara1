<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Post;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        // تحقق مما إذا كانت البيانات موجودة في الكاش
        if (Cache::has('all_posts')) {
            // استرجاع البيانات من الكاش إذا تم العثور عليها
            $all_posts = Cache::get('all_posts');
        } 
            // استعلام قاعدة البيانات للحصول على المشاركات إذا لم يتم العثور عليها في الكاش



        # update title with description 
        $this->seo()->setTitle('الرئيسية ');
        $this->seo()->setDescription('مشكاة هي مدونة تقنية، تهدف إلى تقديم الدعم في مجال انظمة الويب ، لجميع المهتمين ورواد الاعمال ، لتكون على اطلاع مستمر لاتنسى متابعة حساباتنا على مواقع التواصل .');
        $this->seo()->addImages(asset('assets/img/bitmap.png'));
        # update SEO service 
        $this->seo()->opengraph()->addProperty('type', 'web');
        $this->seo()->twitter()->setSite('@alo0o0o01');
        $this->seo()->jsonLd()->setType('WebPage');

        // category methods for articles 

        // $categories = Category::select('title', 'name', 'id')->paginate(6);
        $all_posts = Post::select('title', 'img_url', 'id', 'created_at', 'slug', 'user_id')
        ->orderBy('created_at', 'desc')
        ->paginate(12);
        Cache::put('all_posts', $all_posts, 60); 
        # return array to welcome page 
        return view('home.welcom', compact('all_posts'));
    }


    public function search(Request $request)
    {
        # validate query 
        $request->validate([
            'query' => 'required'
        ]);

        # query parameters
        $q = $request->input('query');

        # get results from Post model
        $result = Post::where('title', 'like', '%' . $q . '%')
            ->orWhere('slug', 'like', '%' . $q . '%')
            ->select('title', 'slug', 'img_url') // اختر الحقول التي تحتاجها هنا
            ->paginate(8);

        return view('home.components.pages.search', compact('result'));
    }

    public function pages($id)
    {
        $post = Page::find($id);

        # update seo service in pages 
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->slug);
        # update seo service 
        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->slug)
            ->addImage(asset($post->img_url));

        return view('home.components.pages.show', compact('pages'));
    }


    public function destroy($id)
    {
        //
    }
    public function display($title)
    {
        if (Cache::has('post_' . $title)) {
            // get date from cache
            $post = Cache::get('post_' . $title);
        } 
            // else get date from datebase and save in cache 
            $title = str_replace('_', ' ', $title);
            $post = Post::where('title', $title)->firstOrFail();
            Cache::put('post_' . $title, $post, 60); 

        // تحديث بيانات SEO
        $this->seo()->setTitle("{$post->title}");
        $this->seo()->setDescription($post->slug);
        $this->seo()->addImages([
            [
                'url' => $post->img_url,
                'type' => 'ImageObject',
                'name' => $post->title,
            ]
        ]);
        // article

        $this->seo()->opengraph()->setUrl($post->slug);
        $this->seo()->opengraph()->addProperty('type', 'articles');

        $this->seo()->setCanonical(route('display', ['title' => str_replace(' ', '_', $post->title)]));
        $this->seo()->jsonLd()->setType('Article');

        // other date seo 
        $published_time = Carbon::parse($post->created_at)->format('Y-m-d\TH:i:sP');
        $modified_time = Carbon::parse($post->updated_at)->format('Y-m-d\TH:i:sP');

        $this->seo()->opengraph()
            ->setTitle($post->title)
            ->setDescription($post->slug)
            ->setType('article')
            ->setArticle([
                'published_time' => $published_time,
                'modified_time' => $modified_time,
                'author' => ['name' => 'meshcah'],
            ])
            ->setUrl($post->slug);

        $this->seo()->jsonLd()
            ->setType('Article')
            ->setTitle($post->title)
            ->setDescription($post->slug)
            ->setUrl(route('display', ['title' => str_replace(' ', '_', $post->title)]));

        $this->seo()->twitter()
            ->setTitle($post->title)
            ->setDescription($post->slug)
            ->setImage(asset($post->img_url))
            ->setSite('meshcah');

        $dis_posts = Post::with('comments')->where('title', $title)->first();

        if (!$dis_posts) {
            abort(404);
        }

        $comments = $dis_posts->comments ?? [];

        return view('home.layouts.including.display', compact('dis_posts', 'comments'));
    }


}
