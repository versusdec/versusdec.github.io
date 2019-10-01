<?php
namespace controllers;
use core\controller;
use core\helper;

class company extends controller
{
    public function index()
    {
        $company = $this->api->call('companies.get', ['meta_id' => $this->meta['id']]);

        if (!empty($company)) {

            $limit = 1;

            if (empty($this->meta['title'])) {
                $this->meta['title'] = $company['h1'];
            }

            $actions = $this->api->call('actions.getByCompanyId', ['company_id' => $company['id'], 'limit' => $limit]);
            if ($actions['items']){
                $actions = $actions['items'];
            } else {
                $actions = [];
            }

            $meta_ids = [];

            $news = $this->api->call('news.getByCompanyId', ['company_id' => $company['id'], 'limit' => $limit]);
            if ($news['items']){
                $news = $news['items'];
                foreach ($news as $item){
                    $meta_ids[] = $item['meta_id'];
                }
            } else {
                $news = [];
            }

            //$products = $this->api->call('products.getByCompanyId', ['company_id' => $company['id'], 'limit' => 6]);
            $products = $this->api->call('products.find', [
                'company_id' => $company['id'],
                'limit' => $limit,
                'active' => 1,
                'deleted' => 0,
                'order' => ['price', 'ASC']
            ]);
            if ($products['items']){
                $products = $products['items'];
                foreach ($products as $item){
                    $meta_ids[] = $item['meta_id'];
                }
            } else {
                $products = [];
            }

            if ($company['category_id'] != 0) {
                $category = $this->api->call('categories.get', ['id' => $company['category_id']]);
                $category['meta'] = $this->api->call('meta.get', ['id' => $category['meta_id']]);
            }

            $vacancies = $this->api->call('vacancies.getByCompanyId', ['company_id' => $company['id'], 'limit' => 4]);
            if ($vacancies['items']){
                $vacancies = $vacancies['items'];
                foreach ($vacancies as $item){
                    $meta_ids[] = $item['meta_id'];
                }
            } else {
                $vacancies = [];
            }

            $this->render('company', [
                'helper' => helper::class,
                'company' => $company,
                'actions' => $actions,
                'news' => $news,
                'products' => $products,
                'vacancies' => $vacancies,
                'urls' => helper::getURLs($this, $meta_ids),
                'category' => $category??false,
                'limit' => $limit,
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