<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    /**
     * Generate and display the sitemap.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sitemap = Sitemap::create();

        // Domovská stránka
        $sitemap->add(Url::create(url('/'))
            ->setPriority(1.0)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));

        // Kontakt
        $sitemap->add(Url::create(url('/kontakt'))
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));

        // Ceník
        $sitemap->add(Url::create(url('/cenik'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));

        // Naše vozy
        $sitemap->add(Url::create(url('/nase-vozy'))
            ->setPriority(0.8)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));

        // Doprava na letiště
        $sitemap->add(Url::create(url('/doprava-na-letiste'))
            ->setPriority(0.9)
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));

        return response($sitemap->render(), 200, ['Content-Type' => 'application/xml']);
    }
}
