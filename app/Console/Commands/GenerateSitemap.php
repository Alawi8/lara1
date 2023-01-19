<?php
namespace App\Console\Commands;

use DOMDocument;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\Sitemap\SitemapGenerator;
use App\Models\Post;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        // try{

        // }
        // cache(\Exception $e ){
        //     Log::error($e->getMassage())
        // }
        $posts = Post::get(); // Taking only 2 posts. USE Post::get() TO GET ALL.
        $urls = [];


        ini_set("memory_limit", "-1");
        set_time_limit(0);
        ini_set('max_execution_time', 0);
        ignore_user_abort(true);


        // PUTTING POSTS TO ARRAY.

        foreach ($posts as $post) {
            $urls[] = '/post/' . $post->id . '/' . Str::slug($post->title);
        }


        // MAKEING SITEMAP FOLDER.


        if (!file_exists(public_path('/sitemap'))) {
            mkdir(public_path('/sitemap', 0777, true));
        }


        Header('Content-type: text/xml');


        $time = new \DateTime;
        $dom = new DOMDocument('1.0', 'UTF-8');

        // Main root tag.

        // GENERATING XML.

        $root = $dom->createElement('urlset');
        $dom->appendChild($root);
        $root->setAttribute('xmlns', "http://www.sitemaps.org/schemas/sitemap/0.9");
        $root->setAttribute('xmlns:xhtml', "http://www.w3.org/1999/xhtml");
        $root->setAttribute('xmlns:image', "http://www.google.com/schemas/sitemap-image/1.1");
        $root->setAttribute('xmlns:video', "http://www.google.com/schemas/sitemap-video/1.1");


        $this->path = public_path('/sitemap');
        $fileName = 'sitemap';


        // Rename old sitemap.


        if (file_exists($this->path . $fileName . '.xml')) {
            chmod($this->path, 0777);
            chmod($this->path . $fileName . '.xml', 0777);
            rename($this->path . $fileName . '.xml', $this->path . 'sitemap-old-' . date('D_d-M-Y h-m-s') . '.xml');
        }


        // PUTTING POSTS TO XML.

        foreach ($urls as $url) {
            if (isset($url)) {
                $result = $dom->createElement('url');
                $root->appendChild($result);
                $result->appendChild($dom->createElement('loc', "https://khlih.com/lara1/public" . $url));
                $result->appendChild($dom->createElement('priority', '1.0'));
                $result->appendChild($dom->createElement('lastmod', $time->format(\DateTime::ATOM)));
                $dom->save(public_path('/sitemap/' . $fileName . '.xml'));
            }
        }


        if (env('APP_ENV') == 'local') {
            dd('Sitemap Generated');
        }
    }
}