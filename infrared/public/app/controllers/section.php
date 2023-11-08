<?php
namespace controllers;

use core\api;

class section extends baseController
{
    public function index()
    {
        $section = api::get('sections/get', ['meta_id' => $this->meta->id]);

        if (!empty($section)&&($section->active)) {
            if ($this->page) {
                $current = $this->page;
                $this->meta->title_en .= ' - Page ' . $current;
                $this->meta->description_en .= ' - Page ' . $current;
                $this->meta->title_ru .= ' - Страница ' . $current;
                $this->meta->description_ru .= ' - Страница ' . $current;
            } else {
                $current = '1';
            }

            $pages = api::get('careers/getListActivePagesBySection', ['section_id' => $section->id, 'limit' => '3']);

            $career = api::get('careers/getListActiveBySection', [
                'section_id' => $section->id,
                'page' => $current,
                'limit' => '3'
            ]);

            $this->rss = '/career/' . $section->id . '/rss.xml';

            $this->render('career/section', [
                'sections' => api::get('sections/getActive'),
                'section' => $section,
                'career' => $career,
                'current' => $current,
                'pages' => $pages,
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
}