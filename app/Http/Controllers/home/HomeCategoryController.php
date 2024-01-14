<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use GuzzleHttp\Middleware;

class HomeCategoryController extends Controller {
    use SEOToolsTrait;


    public function index() {

        $this->seo()->setTitle('التصنيفات');
        $this->seo()->setDescription('مشكاه هي منصة تقنية مبتكرة تهدف إلى تحسين وتسهيل العمليات التقنية. تتميز المنصة بمجموعة واسعة من الخدمات والأدوات التي تدعم مطوري البرمجيات ورواد الأعمال في تحقيق أهدافهم بشكل فعال');
        
        // تحديد نوع المشاركة للوسائط الاجتماعية
        $this->seo()->opengraph()->setType('website');
        $this->seo()->twitter()->setType('summary_large_image');
        
        // تحديد رابط الموقع ونوع المحتوى للوسائط الاجتماعية
        $this->seo()->opengraph()->setUrl('http://meshcah.net/categories');
        $this->seo()->opengraph()->addProperty('type', 'categories');
        
        // تحديد حساب Twitter الخاص بك
        $this->seo()->twitter()->setSite('@alo0o0o01');
        
        // تحديد نوع JSON-LD
        $this->seo()->jsonLd()->setType('WebPage');

        $categories = Category::all();

        return view('home.components.categories.index', compact('categories'));
    }

    // use App\Http\Controllers\Controller;

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
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = category::find($id);
        $this->seo()->setTitle( $categories->name .' - '.'التصنيفات');
        $this->seo()->setDescription($categories->title);
        
        // تحديد نوع المشاركة للوسائط الاجتماعية
        $this->seo()->opengraph()->setType('website');
        $this->seo()->twitter()->setType('summary_large_image');
        
        // تحديد رابط الموقع ونوع المحتوى للوسائط الاجتماعية
        $this->seo()->opengraph()->setUrl('http://meshcah.net/categories/'.($id));
        $this->seo()->opengraph()->addProperty('type', 'categories');
        
        // تحديد حساب Twitter الخاص بك
        $this->seo()->twitter()->setSite('@alo0o0o01');
        
        // تحديد نوع JSON-LD
        $this->seo()->jsonLd()->setType('WebPage');

        $category = Category::findOrFail($id);

        // استرجاع المقالات المتعلقة
        $articles = $category->posts;

        return view('home.components.categories.show', ['category' => $category, 'posts' => $articles]);

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
     *
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }


}
