<?php
namespace controllers;
use core\controller;

class vacancy extends controller
{
    public function index()
    {
        $vacancy = $this->api->call('vacancies.get', ['meta_id' => $this->meta['id']]);

        if (!empty($vacancy)) {

            if (empty($this->meta['title'])) {
                $this->meta['title'] = $vacancy['h1'];
            }

            if ($vacancy['category_id'] != 0) {
                $category = $this->api->call('categories.get', ['id' => $vacancy['category_id']]);
                $category['meta'] = $this->api->call('meta.get', ['id' => $category['meta_id']]);
            }

            $this->render('vacancy', [
                'vacancy' => $vacancy,
                'category' => $category??false,
                'WIDGETS' => ROOT. '/public/views/layout/widgets/'
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