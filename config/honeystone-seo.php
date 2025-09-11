<?php

declare(strict_types=1);

use Honeystone\Seo\Generators;

return [

    'generators' => [
        Generators\MetaGenerator::class => [
            'title' => 'Transport2Airport - Odvoz na letiště a osobní přeprava',
            'titleTemplate' => '{title} | Transport2Airport',
            'description' => 'Spolehlivá doprava na letiště Václava Havla, Vídeň, Brno, Ostrava a další. Odvoz z Olomouce a okolí. Rezervujte si transfer na letiště ještě dnes!',
            'keywords' => [
                'doprava na letiště', 'přeprava na letiště', 'odvoz na letiště', 'transfer na letiště', 'taxi na letiště',
                'doprava na letiště Václava Havla', 'odvoz z Olomouce na letiště Praha', 'přeprava na letiště Vídeň z Olomouce',
                'letištní transfer', 'osobní přeprava na letiště', 'letištní taxi', 'soukromý odvoz na letiště',
                'cena taxi na letiště', 'levná doprava na letiště Praha', 'rezervace transferu na letiště'
            ],
            'canonicalEnabled' => true,
            'canonical' => null, // null to use current url
            'robots' => [],
            'custom' => [
                // [
                //     'greeting' => 'Hey, thanks for checking out the source code of our website. '.
                //         'Hopefully you find what you are looking for 👍'
                // ],
                // [
                //     'google-site-verification' => 'xxx',
                // ],
            ],
        ],
        Generators\TwitterGenerator::class => [
            'enabled' => true,
            'site' => '@transport2airport', // @twitterUsername
            'card' => 'summary_large_image',
            'creator' => '@transport2airport',
            'creatorId' => '',
            'title' => 'Odvoz na letiště a osobní přeprava | Transport2Airport',
            'description' => 'Spolehlivá doprava na letiště Václava Havla, Vídeň, Brno, Ostrava a další. Odvoz z Olomouce a okolí.',
            'image' => '/img/logo-icon.svg',
            'imageAlt' => 'Transport2Airport logo - odvoz na letiště',
        ],
        Generators\OpenGraphGenerator::class => [
            'enabled' => true,
            'site' => env('APP_NAME'),
            'type' => 'website',
            'title' => 'Odvoz na letiště a osobní přeprava | Transport2Airport',
            'description' => 'Spolehlivá doprava na letiště Václava Havla, Vídeň, Brno, Ostrava a další. Odvoz z Olomouce a okolí.',
            'images' => ['/img/logo-icon.svg'],
            'audio' => [],
            'videos' => [],
            'determiner' => '',
            'url' => null, // null to use current url
            'locale' => 'cs_CZ',
            'alternateLocales' => [],
            'custom' => [],
        ],
        Generators\JsonLdGenerator::class => [
            'enabled' => true,
            'pretty' => env('APP_DEBUG'),
            'type' => 'WebPage',
            'name' => '',
            'description' => '',
            'images' => [],
            'url' => null, // null to use current url
            'custom' => [],

            // determines if the configured json-ld is automatically placed on the graph
            'place-on-graph' => true,
        ],
    ],

    'sync' => [
        'url-canonical' => true,
        'keywords-tags' => false,
    ],
];
