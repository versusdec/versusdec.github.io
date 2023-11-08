<?php
namespace controllers;

use core\api;

class page extends baseController
{
	public function index()
	{
		$page = api::get('pages/get', ['meta_id' => $this->meta->id]);

        if ( !empty($page)&&($page->active)) {

            if ($this->meta->id == '2') {
                //services
	            $services = api::get('services/getActive');
	            $banners = api::get('banners/getActive');
	            $projects = api::get('projects/getActive');
	            $departments = api::get('departments/getActive');

	            $this->render('services/list', [
	            	'page' => $page,
		            'services' => $services,
		            'banners' => $banners,
                    'projects' => $projects,
                    'departments' => $departments
	            ]);
            } elseif ($this->meta->id == '3') {
                //lawyers
	            $lawyers = api::get('lawyers/getActive');
                $services = api::get('services/getActive');
                $departments = api::get('departments/getActive');

	            $this->render('lawyers/list', [
                    'page' => $page,
		            'lawyers' => $lawyers,
                    'services' => $services,
                    'departments' => $departments
	            ]);
            } elseif ($this->meta->id == '4') {
                //news
                $categories = api::get('categories/getActive');

                if ($this->lang == 'en') {
                    foreach ($categories as $k => $cat) {
                        if ($cat->id == '3') {
                            unset($categories[$k]);
                        }
                    }
                }

                foreach ($categories as &$category) {
	                $category->news = api::get('news/getLastByCategory', ['cat_id' => $category->id]);
                }

                $this->render('news/list', [
                    'page' => $page,
	                'categories' => $categories
                ]);
            } elseif ($this->meta->id == '5') {
            	//career
                /*
                $services = api::get('services/getActive');
	            $this->render('pages/career', [
	                'page' => $page,
                    'services' => $services
                ]);
                */
                $sections = api::get('sections/getActive');

                foreach ($sections as &$section) {
                    $section->careers = api::get('careers/getLastBySection', ['section_id' => $section->id]);
                }

                $this->render('career/list', [
                    'page' => $page,
                    'sections' => $sections
                ]);
            } elseif ($this->meta->id == '6') {
	            //contacts
	            $this->render('pages/contacts', ['page' => $page]);
            } elseif ($this->meta->id == '8') {
	            //about
	            $this->render('pages/about', ['page' => $page]);
            } elseif ($this->meta->id == '7') {
                //blog
                if ($this->page) {
                    $current = $this->page;
                    $this->meta->title_en .= ' - Page '.$current;
                    $this->meta->description_en .= ' - Page '.$current;
                    $this->meta->title_ru .= ' - Страница '.$current;
                    $this->meta->description_ru .= ' - Страница '.$current;
                } else {
                    $current = '1';
                }

                $articles = api::get('articles/getListActive', ['page' => $current, 'limit' => '4']);
                $pages = api::get('articles/getListActivePages', ['limit' => '4']);

                $this->rss = '/blog/rss.xml';

                $this->render('articles/list', [
                    'page' => $page,
                    'articles' => $articles,
                    'current' => $current,
                    'pages' => $pages
                ]);
            } elseif ($this->meta->id == '127'){
                //subscription
                $this->render('pages/subscription', [
                    'themes' => api::get('themes/getActive'),
                    'page' => $page
                ]);
            } elseif ($this->meta->id == '9') {
                //services
                $services = api::get('services/getActive');
                $banners = api::get('banners/getActive');
                $projects = api::get('projects/getActive');
                $departments = api::get('departments/getActive');

                $this->render('services/list', [
                    'page' => $page,
                    'services' => $services,
                    'banners' => $banners,
                    'projects' => $projects,
                    'departments' => $departments
                ]);
            } else {
                $this->render('page', [
                    'page' => $page
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

	public function request()
    {

    }
}