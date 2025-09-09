<?php

return [
    /*
     * The base URL of your application.
     * This will be used to create the URLs of the sitemap.
     */
    'base_url' => config('app.url'),

    /*
     * The name of the sitemap file that will be generated.
     */
    'filename' => 'sitemap.xml',

    /*
     * The path where the sitemap will be generated.
     */
    'path' => public_path(),

    /*
     * The URLs that should be included in the sitemap.
     */
    'urls' => [
        ['url' => '/', 'priority' => 1.0, 'changefreq' => 'weekly'],
        ['url' => '/kontakt', 'priority' => 0.9, 'changefreq' => 'monthly'],
        ['url' => '/cenik', 'priority' => 0.8, 'changefreq' => 'monthly'],
        ['url' => '/nase-vozy', 'priority' => 0.8, 'changefreq' => 'monthly'],
    ],

    /*
     * The URLs that should be excluded from the sitemap.
     */
    'exclude' => [
        '/admin*',
        '/livewire*',
        '/sanctum*',
        '/filament*',
        '/api*',
        '/poptavka*',
        '/up',
    ],
];