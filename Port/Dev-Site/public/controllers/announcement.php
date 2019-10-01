<?php
namespace controllers;
use core\controller;

class announcement extends controller
{
    public function index()
    {
        $announcement = $this->api->call('announcements.get', ['meta_id' => $this->meta['id']]);

        if (!empty($announcement)) {

            if (empty($this->meta['title'])) {
                $this->meta['title'] = $announcement['h1'];
            }

            if ($announcement['category_id'] != 0) {
                $category = $this->api->call('categories.get', ['id' => $announcement['category_id']]);
                $category['meta'] = $this->api->call('meta.get', ['id' => $category['meta_id']]);
            }

            $this->render('announcement', [
                'announcement' => $announcement,
                'category' => $category??false
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