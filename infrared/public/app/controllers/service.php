<?php
namespace controllers;

use core\api;
use core\db;

class service extends baseController
{
    public function index()
    {
        $service = api::get('services/get', ['meta_id' => $this->meta->id]);
        $projects = api::get('projects/getByServiceId', ['service_id' => $service->id]);
        $lawyers = api::get('lawyers/getByServiceId', ['service_id' => $service->id]);

	    if ( !empty($service)&&($service->active)) {
            $this->render('services/item', [
                'service' => $service,
                'projects' => $projects,
	            'lawyers' => $lawyers,
                'services' => api::get('services/getActive'),
                'departments' => api::get('departments/getActive')
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