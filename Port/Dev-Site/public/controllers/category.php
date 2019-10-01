<?php
namespace controllers;
use core\controller;
use core\helper;

class category extends controller
{
    public function index()
    {
        $category = $this->api->call('categories.get', ['meta_id' => $this->meta['id']]);

        if (!empty($category)) {

            if (empty($this->meta['title'])) {
                $this->meta['title'] = $category['h1'];
            }

            $meta_ids = [];

            switch ($category['type']){
                case 'companies':
                    $limit = 1;//9;
                    $companies = $this->api->call('companies.getByCategoryId', [ 'limit' => $limit, 'category_id' => $category['id'] ]);
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
                        'category' => $category,
                        'companies' => $companies,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'companies_categories' => $companies_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;

                case 'products':
                    $limit = 1;//6;
                    $products = $this->api->call('products.getByCategoryId', [ 'limit' => $limit, 'category_id' => $category['id'] ]);
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
                        'category' => $category,
                        'products' => $products,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'products_categories' => $products_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;

                case 'vacancies':
                    $limit = 1;//6;
                    $companies_ids = [];
                    $vacancies = $this->api->call('vacancies.getByCategoryId', [ 'limit' => $limit, 'category_id' => $category['id'] ]);
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
                        'category' => $category,
                        'vacancies' => $vacancies,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'vacancies_categories' => $vacancies_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;

                case 'announcements':
                    $limit = 1;//6;
                    $announcements = $this->api->call('announcements.getByCategoryId', [ 'limit' => $limit, 'category_id' => $category['id'] ]);
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
                        'category' => $category,
                        'announcements' => $announcements,
                        'urls' => helper::getURLs($this, $meta_ids),
                        'announcements_categories' => $announcements_categories,
                        'limit' => $limit,
                        'WIDGETS' => ROOT. '/public/views/layout/widgets/'
                    ]);
                    break;

                default:
                    $this->render('categories/'.$category['type'], [
                        'category' => $category
                    ]);
            }

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