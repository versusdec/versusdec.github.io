<?php
namespace controllers;

use core\api;

class feed extends baseController
{
    public function articles()
    {
        $articles = api::get('articles/getListActive', ['page' => '1', 'limit' => '4']);

        header('Content-type: application/xml');
        echo $this->renderPartial('articles/rss', [
            'articles' => $articles
        ]);
    }

    public function news()
    {
        if (!empty($this->page)) {
            $category = api::get('categories/get', ['id' => (string)$this->page]);
            if (!empty($category)&&!empty($category->id)) {
                $news = api::get('news/getListActiveByCategory', ['category_id' => $category->id, 'page' => '1', 'limit' => '10']);

                header('Content-type: application/xml');
                echo $this->renderPartial('news/rss', [
                    'category' => $category,
                    'news' => $news
                ]);
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

    public function career()
    {
        if (!empty($this->page)) {
            $section = api::get('sections/get', ['id' => (string)$this->page]);
            if (!empty($section)&&!empty($section->id)) {
                $careers = api::get('careers/getListActiveBySection', ['section_id' => $section->id, 'page' => '1', 'limit' => '10']);

                header('Content-type: application/xml');
                echo $this->renderPartial('career/rss', [
                    'section' => $section,
                    'careers' => $careers
                ]);
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