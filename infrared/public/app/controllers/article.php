<?php
namespace controllers;

use core\api;

class article extends baseController
{
    public function index()
    {
        $article = api::get('articles/get', ['meta_id' => $this->meta->id]);

        if ( !empty($article)&&($article->active)) {

            $comments = api::get('comments/getByArticleId', [
                'article_id' => $article->id,
                'lang' => $this->lang,
                'limit' => '50'
            ]);

            $this->render('articles/item', [
                'article' => $article,
                'comments' => $comments
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
    }

    public function request()
    {

    }
}