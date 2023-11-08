<?php
namespace controllers;

use core\api;

class news extends baseController
{
    public function index()
    {
        $news = api::get('news/get', ['meta_id' => $this->meta->id]);

        if (!empty($news)&&($news->active)) {
            if ($this->lang == 'en' && $news->category_id == '3'){
                header('HTTP/1.1 404 Not Found');
                $this->meta->title_en = $this->settings->not_found_title_en;
                $this->meta->description_en = $this->settings->not_found_desc_en;
                $this->meta->keywords_en  = $this->settings->not_found_keywords_en;
                $this->meta->title_ru  = $this->settings->not_found_title_ru;
                $this->meta->description_ru  = $this->settings->not_found_desc_ru;
                $this->meta->keywords_ru  = $this->settings->not_found_keywords_ru;
                $this->render('404', []);
            } else {
                $this->render('news/item', [
                    'news' => $news
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