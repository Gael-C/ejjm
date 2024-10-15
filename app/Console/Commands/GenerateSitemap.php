<?php

namespace App\Console\Commands;

use App\Models\Articles;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = SitemapGenerator::create(config('app.url'))
            ->getSitemap();

        $sitemap->add(
            Url::create('/')
            ->setPriority(1)
        );
        $sitemap->add(
            Url::create('/bureau')
            ->setPriority(0,9)
        );
        $sitemap->add(
            Url::create('/contact')
            ->setPriority(0.8)
        );
        $sitemap->add(
            Url::create('/blog')
            ->setPriority(0.7)
        );

        Articles::get()->each(function ($article) use ($sitemap) {
            $sitemap->add(
                Url::create("/blog/{$article->slug}")
                    ->setLastModificationDate($article->updated_at)
                    // ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        });
        $sitemap->writeToFile(public_path('sitemaps.xml'));
    }
}
