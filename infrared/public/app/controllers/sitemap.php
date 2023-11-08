<?php
namespace controllers;

use core\api;

class sitemap extends baseController
{
    public function index()
    {
        $metas = api::get('meta/getSitemap');
        $date = str_replace(' ', 'T', date("Y-m-d H:i:s")) . "+03:00";
        $langs = ['ru', 'en'];

        header("Content-type: text/xml; charset=utf-8");
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
        foreach ($langs as $lang) {
            foreach ($metas as $meta) {
                if ($meta->active == '1') {
                    if (!($lang == 'en' && $meta->id == '39')) {
                        echo "\t<url>\n";
                        echo "\t\t<loc>" . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
                        echo $lang != 'ru' ? '/' . $lang : '';
                        echo $meta->url . "</loc>\n";
                        echo "\t\t<lastmod>" . $date . "</lastmod>\n";
                        echo "\t\t<changefreq>daily</changefreq>\n";
                        echo "\t\t<priority>1</priority>\n";
                        echo "\t</url>\n";
                    }
                }
            }
        }
        echo "</urlset>";

    }

    public function html()
    {
        header('Location: /sitemap.xml');
        exit();
    }
}