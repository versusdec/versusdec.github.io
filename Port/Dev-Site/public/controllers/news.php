<?php
namespace controllers;
use core\controller;

class news extends controller
{
    public function index()
    {
        $news = $this->api->call('news.get', ['meta_id' => $this->meta['id']]);

        if (!empty($news)) {

            if (empty($this->meta['title'])) {
                $this->meta['title'] = $news['h1'];
            }

            $this->render('news', [
                'news' => $news
            ]);
        } else {
            $this->handleNotFound();
        }
    }

    private function handleNotFound()
    {
        header('HTTP/1.1 404 Not Found');
        $this->meta['title'] = $this->settings['not_found_title'];
        $this->meta['description'] = $this->settings['not_found_desc'];
        $this->meta['keywords']  = $this->settings['not_found_keywords'];
        $this->render('404', []);
    }
}