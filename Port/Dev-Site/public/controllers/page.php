<?php
namespace controllers;
use core\controller;
use core\helper;

class page extends controller
{
    public function index()
    {
        helper::getLoggedUser($this);

        $page = $this->api->call('pages.get', ['meta_id' => $this->meta['id']]);

        if (!empty($page)) {

            if (empty($this->meta['title'])) {
                $this->meta['title'] = $page['h1'];
            }

            $meta_ids = [];

            switch ($this->meta['id']){
                case 2:
                    //companies
                    $limit = 1;//9;
                    $companies = $this->api->call('companies.find', [
                        'limit' => $limit,
                        'active' => 1,
                        'deleted' => 0
                    ]);
                    if ($companies['items']){
                        $companies = $companies['items'];
                        foreach ($companies as $company){
                            $meta_ids[] = $company['meta_id'];
                        }
                    } else {
                        $companies = [];
                    }

                    $companies_categories = $this->api->call('categories.getActive');
                    if (!empty($companies_categories)){
                        foreach ($companies_categories as $item){
                            $meta_ids[] = $item['meta_id'];
                            if (!empty($item['children'])){
                                foreach ($item['children'] as $child){
                                    $meta_ids[] = $child['meta_id'];
                                }
                            }
                        }
                    }

                    $this->render('categories/companies', [
                        'page' => $page,
                        'companies' => $companies,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'companies_categories' => $companies_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;
                case 3:
                    //news
                    $limit = 1;//10;
                    $news = $this->api->call('news.getByCompanyId', ['company_id' => 0, 'limit' => $limit]);
                    if ($news['items']){
                        $news = $news['items'];
                        foreach ($news as $news_item){
                            $meta_ids[] = $news_item['meta_id'];
                        }
                    } else {
                        $news = [];
                    }

                    $this->render('categories/news', [
                        'helper' => helper::class,
                        'page' => $page,
                        'news' => $news,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;
                case 4:
                    //companies news
                    $limit = 1;//10;
                    $news = $this->api->call('news.find', [
                        'company_id_not' => 0,
                        'deleted' => 0,
                        'active' => 1,
                        'limit' => $limit,
                        'range_start' => date('Y-m-d H:i:s', strtotime('-1 month')),
                        'range_end' => date('Y-m-d H:i:s')
                    ]);
                    if ($news['items']){
                        $news = $news['items'];
                        foreach ($news as $news_item){
                            $meta_ids[] = $news_item['meta_id'];
                        }
                    } else {
                        $news = [];
                    }

                    $this->render('categories/news', [
                        'helper' => helper::class,
                        'page' => $page,
                        'news' => $news,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;
                case 5:
                    //products
                    $limit = 1;//6;
                    $products = $this->api->call('products.find', [
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

                    $products_categories = $this->api->call('categories.getActive', ['type' => 'products']);
                    if (!empty($products_categories)){
                        foreach ($products_categories as $item){
                            $meta_ids[] = $item['meta_id'];
                            if (!empty($item['children'])){
                                foreach ($item['children'] as $child){
                                    $meta_ids[] = $child['meta_id'];
                                }
                            }
                        }
                    }

                    $this->render('categories/products', [
                        'page' => $page,
                        'products' => $products,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'products_categories' => $products_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;
                case 6:
                    //actions
                    $actions = $this->api->call('actions.getActive');
                    if ($actions['items']){
                        $actions = $actions['items'];
                    } else {
                        $actions = [];
                    }

                    $banners = [];
                    $banners_raw = $this->api->call('banners.getActive');
                    if ($banners_raw['items']){
                        foreach ($banners_raw['items'] as $banner){
                            $banners[$banner['position']] = $banner;
                        }
                    }
                    unset($banners_raw);

                    $this->render('categories/actions', [
                        'actions' => $actions,
                        'banners' => $banners,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;
                case 7:
                    //announcements
                    $limit = 1;//
                    $announcements = $this->api->call('announcements.find', [
                        'limit' => $limit,
                        'active' => 1,
                        'deleted' => 0,
                        'order' => ['id', 'DESC']
                    ]);
                    if ($announcements['items']){
                        $announcements = $announcements['items'];
                        foreach ($announcements as $item){
                            $meta_ids[] = $item['meta_id'];
                        }
                    } else {
                        $announcements = [];
                    }

                    $announcements_categories = $this->api->call('categories.getActive', ['type' => 'announcements']);
                    if (!empty($announcements_categories)){
                        foreach ($announcements_categories as $item){
                            $meta_ids[] = $item['meta_id'];
                            if (!empty($item['children'])){
                                foreach ($item['children'] as $child){
                                    $meta_ids[] = $child['meta_id'];
                                }
                            }
                        }
                    }

                    $this->render('categories/announcements', [
                        'page' => $page,
                        'announcements' => $announcements,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'announcements_categories' => $announcements_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;
                case 8:
                    //vacancies
                    $limit = 1;//5;
                    $companies_ids = [];
                    $vacancies = $this->api->call('vacancies.find', [
                        'limit' => $limit,
                        'active' => 1,
                        'deleted' => 0
                    ]);
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

                    $vacancies_categories = $this->api->call('categories.getActive', ['type' => 'vacancies']);
                    if (!empty($vacancies_categories)){
                        foreach ($vacancies_categories as $item){
                            $meta_ids[] = $item['meta_id'];
                            if (!empty($item['children'])){
                                foreach ($item['children'] as $child){
                                    $meta_ids[] = $child['meta_id'];
                                }
                            }
                        }
                    }

                    $this->render('categories/vacancies', [
                        'page' => $page,
                        'vacancies' => $vacancies,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'vacancies_categories' => $vacancies_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;
                default:
                    //standard page
                    $this->render('page', [
                        'page' => $page
                    ]);
            }

        } else {
            $this->handleNotFound();
        }
    }

    public function hello()
    {
        echo 'hello from page';
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