<?php
namespace controllers;
use core\controller;

class product extends controller
{
    public function index()
    {
        $product = $this->api->call('products.get', ['meta_id' => $this->meta['id']]);

        if (!empty($product)) {

            if (empty($this->meta['title'])) {
                $this->meta['title'] = $product['h1'];
            }

            if ($product['category_id'] != 0) {
                $category = $this->api->call('categories.get', ['id' => $product['category_id']]);
                $category['meta'] = $this->api->call('meta.get', ['id' => $category['meta_id']]);
            }

            $this->render('product', [
                'product' => $product,
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