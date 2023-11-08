<?php
namespace controllers;

use core\api;

class category extends baseController
{
	public function index()
	{
		$category = api::get('categories/get', ['meta_id' => $this->meta->id]);

		if (!empty($category)&&($category->active)) {
		    if ($this->lang == 'en' && $category->id == '3'){
                header('HTTP/1.1 404 Not Found');
                $this->meta->title_en = $this->settings->not_found_title_en;
                $this->meta->description_en = $this->settings->not_found_desc_en;
                $this->meta->keywords_en  = $this->settings->not_found_keywords_en;
                $this->meta->title_ru  = $this->settings->not_found_title_ru;
                $this->meta->description_ru  = $this->settings->not_found_desc_ru;
                $this->meta->keywords_ru  = $this->settings->not_found_keywords_ru;
                $this->render('404', []);
            } else {
                if ($this->page) {
                    $current = $this->page;
                    $this->meta->title_en .= ' - Page ' . $current;
                    $this->meta->description_en .= ' - Page ' . $current;
                    $this->meta->title_ru .= ' - Страница ' . $current;
                    $this->meta->description_ru .= ' - Страница ' . $current;
                } else {
                    $current = '1';
                }

                $pages = api::get('news/getListActivePagesByCategory', ['category_id' => $category->id, 'limit' => '3']);

                $news = api::get('news/getListActiveByCategory', [
                    'category_id' => $category->id,
                    'page' => $current,
                    'limit' => '3'
                ]);

                $this->rss = '/news/' . $category->id . '/rss.xml';

                $this->render('news/category', [
                    'categories' => api::get('categories/getActive'),
                    'category' => $category,
                    'news' => $news,
                    'current' => $current,
                    'pages' => $pages,
                ]);
            }

		} else {
            header('HTTP/1.1 404 Not Found');
            $this->meta->title_en = $this->settings->not_found_title_en;
            $this->meta->description_en = $this->settings->not_found_desc_en;
            $this->meta->keywords_en  = $this->settings->not_found_keywords_en;
            $this->meta->title_ru  = $this->settings->not_found_title_ru;
            $this->meta->description_ru  = $this->settings->not_found_desc_ru;
            $this->meta->keywords_ru  = $this->settings->not_found_keywords_ru;
            $this->render('404', []);
		}
	}
}