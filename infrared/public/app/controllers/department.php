<?php
namespace controllers;

use core\api;

class department extends baseController
{
    public function index()
    {
        $department = api::get('departments/get', ['meta_id' => $this->meta->id]);
        $projects = api::get('projects/getByDepartmentId', ['department_id' => $department->id]);
        $lawyers = api::get('lawyers/getByDepartmentId', ['department_id' => $department->id]);

        if ( !empty($department)&&($department->active)) {

            $this->render('departments/item', [
                'department' => $department,
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