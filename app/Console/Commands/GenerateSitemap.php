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
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemapGenerator=SitemapGenerator::create('https://viens-yamo.com')->getSitemap();
        $sitemapGenerator->add(Url::create('/')->setPriority(1));
        $sitemapGenerator->writeToFile(public_path('sitemap.xml'));
        return 'Sitemap generated';
    }
}
