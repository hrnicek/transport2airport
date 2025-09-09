<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap...');

        $sitemap = SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                // Customize URL properties
                if ($url->segment(1) === 'kontakt') {
                    $url->setPriority(0.9);
                    $url->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);
                }

                if ($url->segment(1) === 'cenik') {
                    $url->setPriority(0.8);
                    $url->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);
                }

                if ($url->segment(1) === 'nase-vozy') {
                    $url->setPriority(0.8);
                    $url->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY);
                }

                if ($url->segment(1) === '') {
                    $url->setPriority(1.0);
                    $url->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY);
                }

                // Exclude admin routes and other non-public routes
                if (
                    $url->segment(1) === 'admin' ||
                    $url->segment(1) === 'livewire' ||
                    $url->segment(1) === 'sanctum' ||
                    $url->segment(1) === 'filament' ||
                    $url->segment(1) === 'api' ||
                    $url->segment(1) === 'poptavka' ||
                    $url->segment(1) === 'up'
                ) {
                    return false;
                }

                return true;
            })
            ->getSitemap();

        // Write the sitemap to a file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');
    }
}