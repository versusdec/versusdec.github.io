<?php
namespace controllers;
use core\controller;
use core\helper;

class main extends controller
{
    public function index()
    {
        helper::getLoggedUser($this);

        $meta_ids = [];

        $news = $this->api->call('news.find', ['limit' => 8, 'active' => 1, 'deleted' => 0]);
        $region_news = [];
        $companies_news = [];
        if ($news['items']){
            foreach ($news['items'] as $item){
                if ($item['company_id'] == 0){
                    $region_news[] = $item;
                } else {
                    $companies_news[] = $item;
                }
                $meta_ids[] = $item['meta_id'];
            }
        }
        unset($news);

        $actions = $this->api->call('actions.find', ['limit' => 6, 'active' => 1, 'deleted' => 0]);
        if ($actions['items']){
            $actions = $actions['items'];
        } else {
            $actions = [];
        }

        $companies = $this->api->call('companies.find', ['limit' => 4, 'active' => 1, 'deleted' => 0]);
        if ($companies['items']){
            $companies = $companies['items'];
            foreach ($companies as $company){
                $meta_ids[] = $company['meta_id'];
            }
        } else {
            $companies = [];
        }

        $products = $this->api->call('products.find', ['limit' => 6, 'active' => 1, 'deleted' => 0]);
        if ($products['items']){
            $products = $products['items'];
            foreach ($products as $item){
                $meta_ids[] = $item['meta_id'];
            }
        } else {
            $products = [];
        }

        $companies_ids = [];

        $vacancies = $this->api->call('vacancies.find', ['limit' => 5, 'active' => 1, 'deleted' => 0]);
        if ($vacancies['items']){
            $vacancies = $vacancies['items'];
            foreach ($vacancies as $item){
                $meta_ids[] = $item['meta_id'];
                $companies_ids[] = $item['company_id'];
            }
        } else {
            $vacancies = [];
        }

        if (!empty($companies_ids)){
            $companies_names = $this->api->call('companies.find', ['id' => $companies_ids]);
            if ($companies_names['items']){
                foreach ($companies_names['items'] as $company_item){
                    if (!empty($vacancies)){
                        foreach ($vacancies as &$vacancy){
                            if ($vacancy['company_id'] == $company_item['id']) {
                                $vacancy['company_name'] = $company_item['h1'] ?? $company_item['name'];
                            }

                        }
                    }
                }
            }
            unset($companies_names);
            unset($companies_ids);
        }

        $companies_categories = $this->api->call('categories.getActive');

        $banners = [];
        $banners_raw = $this->api->call('banners.getActive');
        if ($banners_raw['items']){
            foreach ($banners_raw['items'] as $banner){
                $banners[$banner['position']] = $banner;
            }
        }
        unset($banners_raw);

        $this->render('main', [
            'helper' => helper::class,
            'region_news' => $region_news,
            'companies_news' => $companies_news,
            'urls' => helper::getURLs($this, $meta_ids),
            'actions' => $actions,
            'companies' => $companies,
            'products' => $products,
            'vacancies' => $vacancies,
            'companies_categories' => $companies_categories,
            'banners' => $banners,
            'WIDGETS' => ROOT. '/public/views/layout/widgets/'
        ]);
    }

    public function request()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            if (!empty($_POST['act'])&&$_POST['act']=='get'&&!empty($_POST['subject'])&&$_POST['subject']=='companies'){
                $companies = $this->api->call('companies.find', [
                    'limit' => 1000000,
                    'active' => 1,
                    'deleted' => 0
                ]);
                if ($companies['items']){
                    echo json_encode($companies);
                } else {
                    echo json_encode(['error' => 'Ничего не найдено']);
                }
            } else {
                header('HTTP/1.1 406 Not Acceptable');
                exit();
            }

        } else {
            header('HTTP/1.1 405 Method Not Allowed');
            exit();
        }
    }

    public function hello()
    {
        echo 'hello from main';
    }
}