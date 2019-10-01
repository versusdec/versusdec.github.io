<?php
namespace controllers;
use core\controller;
use core\helper;
use core\validate;

class ajax extends controller
{
    public function company()
    {
        if ( validate::int($_POST['page'], ['required' => true])
            && validate::int($_POST['limit'], ['required' => true])
        ){
            $meta_ids[] = [];
            $params = [
                'page' => $_POST['page'],
                'limit' => $_POST['limit'],
                'active' => 1,
                'deleted' => 0
            ];
            if (isset($_POST['category'])){
                $params['category_id'] = $_POST['category'];
            }
            $companies = $this->api->call('companies.find', $params);
            if ($companies['items']){
                $companies = $companies['items'];
                foreach ($companies as $company){
                    $meta_ids[] = $company['meta_id'];
                }
            } else {
                $companies = [];
            }
            $urls = helper::getURLs($this, $meta_ids);
            foreach ($companies as $company) {
                echo $this->renderPartial('layout/widgets/company_item', [
                    'company' => $company,
                    'urls' => $urls
                ]);
            }
        } else {
            $this->handleNotFound();
        }
    }

    public function product()
    {
        if ( validate::int($_POST['page'], ['required' => true])
            && validate::int($_POST['limit'], ['required' => true])
        ){
            $meta_ids[] = [];
            $params = [
                'page' => $_POST['page'],
                'limit' => $_POST['limit'],
                'active' => 1,
                'deleted' => 0
            ];
            if (isset($_POST['category'])){
                $params['category_id'] = $_POST['category'];
            }
            if (isset($_POST['sort'])){
                $sort = explode('-', $_POST['sort']);
                if (count($sort)==2) {
                    $params['order'] = [$sort[0], $sort[1]];
                }
            }
            if (isset($_POST['count'])){
                $params['limit'] = $_POST['count'];
            }
            if (isset($_POST['company'])){
                $params['company_id'] = $_POST['company'];
            }
            $products = $this->api->call('products.find', $params);
            if ($products['items']){
                $products = $products['items'];
                foreach ($products as $product){
                    $meta_ids[] = $product['meta_id'];
                }
            } else {
                $products = [];
            }
            $urls = helper::getURLs($this, $meta_ids);
            foreach ($products as $product_item) {
                echo $this->renderPartial('layout/widgets/product_item', [
                    'product_item' => $product_item,
                    'urls' => $urls
                ]);
            }
        } else {
            $this->handleNotFound();
        }
    }

    public function vacancy()
    {
        if ( validate::int($_POST['page'], ['required' => true])
            && validate::int($_POST['limit'], ['required' => true])
        ){
            $meta_ids[] = [];
            $companies_ids = [];
            $params = [
                'page' => $_POST['page'],
                'limit' => $_POST['limit'],
                'active' => 1,
                'deleted' => 0
            ];
            if (isset($_POST['category'])){
                $params['category_id'] = $_POST['category'];
            }
            if (isset($_POST['sort'])){
                $sort = explode('-', $_POST['sort']);
                if (count($sort)==2) {
                    $params['order'] = [$sort[0], $sort[1]];
                }
            }
            if (isset($_POST['count'])){
                $params['limit'] = $_POST['count'];
            }
            $vacancies = $this->api->call('vacancies.find', $params);
            if ($vacancies['items']){
                $vacancies = $vacancies['items'];
                foreach ($vacancies as $vacancy){
                    $meta_ids[] = $vacancy['meta_id'];
                    $companies_ids[] = $vacancy['company_id'];
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

            $urls = helper::getURLs($this, $meta_ids);
            foreach ($vacancies as $vacancy_item) {
                echo $this->renderPartial('layout/widgets/vacancy_item', [
                    'vacancy_item' => $vacancy_item,
                    'urls' => $urls
                ]);
            }
        } else {
            $this->handleNotFound();
        }
    }

    public function announcement()
    {
        if ( validate::int($_POST['page'], ['required' => true])
            && validate::int($_POST['limit'], ['required' => true])
        ){
            $meta_ids[] = [];
            $params = [
                'page' => $_POST['page'],
                'limit' => $_POST['limit'],
                'active' => 1,
                'deleted' => 0
            ];
            if (isset($_POST['category'])){
                $params['category_id'] = $_POST['category'];
            }
            if (isset($_POST['sort'])){
                $sort = explode('-', $_POST['sort']);
                if (count($sort)==2) {
                    $params['order'] = [$sort[0], $sort[1]];
                }
            }
            if (isset($_POST['count'])){
                $params['limit'] = $_POST['count'];
            }
            $announcements = $this->api->call('announcements.find', $params);
            if ($announcements['items']){
                $announcements = $announcements['items'];
                foreach ($announcements as $announcement){
                    $meta_ids[] = $announcement['meta_id'];
                }
            } else {
                $announcements = [];
            }
            $urls = helper::getURLs($this, $meta_ids);
            foreach ($announcements as $announcement_item) {
                echo $this->renderPartial('layout/widgets/announcement_item', [
                    'announcement_item' => $announcement_item,
                    'urls' => $urls
                ]);
            }
        } else {
            $this->handleNotFound();
        }
    }

    public function news()
    {
        if ( validate::int($_POST['page'], ['required' => true])
            && validate::int($_POST['limit'], ['required' => true])
        ){
            $meta_ids[] = [];
            $params = [
                'page' => $_POST['page'],
                'limit' => $_POST['limit'],
                'active' => 1,
                'deleted' => 0
            ];
            if (isset($_POST['count'])){
                $params['limit'] = $_POST['count'];
            }
            if (isset($_POST['news_for'])){
                if ($_POST['news_for'] == 'region'){
                    $params['company_id'] = 0;
                } else {
                    $params['company_id_not'] = 0;
                }
            }
            if (isset($_POST['range'])){
                $range = explode(',', $_POST['range']);
                if (count($range)==2) {
                    $params['range_start'] = $range[0];
                    $params['range_end'] = $range[1];
                }
            }
            if (isset($_POST['company'])){
                $params['company_id'] = $_POST['company'];
            }
            $news = $this->api->call('news.find', $params);
            if ($news['items']){
                $news = $news['items'];
                foreach ($news as $item){
                    $meta_ids[] = $item['meta_id'];
                }
            } else {
                $news = [];
            }
            $urls = helper::getURLs($this, $meta_ids);
            foreach ($news as $news_item) {
                echo $this->renderPartial('layout/widgets/news_item_lg', [
                    'news_item' => $news_item,
                    'urls' => $urls,
                    'helper' => helper::class
                ]);
            }
        } else {
            $this->handleNotFound();
        }
    }

    public function action()
    {
        if ( validate::int($_POST['page'], ['required' => true])
            && validate::int($_POST['limit'], ['required' => true])
        ){
            $meta_ids[] = [];
            $params = [
                'page' => $_POST['page'],
                'limit' => $_POST['limit'],
                'active' => 1,
                'deleted' => 0
            ];
            if (isset($_POST['company'])){
                $params['company_id'] = $_POST['company'];
            }
            $actions = $this->api->call('actions.find', $params);
            if ($actions['items']){
                $actions = $actions['items'];
            } else {
                $actions = [];
            }
            foreach ($actions as $action_item) {
                echo $this->renderPartial('layout/widgets/action_item', [
                    'action_item' => $action_item
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