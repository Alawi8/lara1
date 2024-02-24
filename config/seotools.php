<?php
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /* 
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => env('APP_NAME'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'For those who helped create the Genki Dama', // set false to total remove
            'separator'    => ' - ',
            'keywords' => [],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'index', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
            
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => env('APP_NAME'),
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary_large_image',
            'site'        => '@alo0o0o01',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => url()->current(), // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        =>  'WebPage',
            'images'      => [
                "@type"=>'thumbnailUrl',
                ""
            ],
            "author" => [
                "@type" => "Person",
                "name" => 'meshcah'
            ]
        ],
    ],
];
