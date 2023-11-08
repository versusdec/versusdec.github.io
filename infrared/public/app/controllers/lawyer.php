<?php
namespace controllers;

use core\api;

class lawyer extends baseController
{
    public function index()
    {
        $lawyer = api::get('lawyers/get', ['meta_id' => $this->meta->id]);

        if ( !empty($lawyer)&&($lawyer->active)) {

            $this->render('lawyers/item', [
                'lawyer' => $lawyer
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