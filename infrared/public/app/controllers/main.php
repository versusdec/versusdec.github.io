<?php
namespace controllers;

use core\api;
use core\potok;
use core\sendgrid;
use core\validate;
use core\SimpleMail;

class main extends baseController
{
	public function index()
	{
        $page = api::get('pages/get', ['meta_id' => $this->meta->id]);
        $banners = api::get('banners/getActive');
        $sliders = api::get('sliders/getActive');
        $brands = api::get('brands/getActive');
        $awards = api::get('awards/getActive');
		$news = api::get('news/getForMain');
		$projects = api::get('projects/getActive');
        $services = api::get('services/getActive');
        $departments = api::get('departments/getActive');

        $this->render('main', [
            'page' => $page,
            'banners' => $banners,
            'sliders' => $sliders,
            'brands' => $brands,
            'awards' => $awards,
	        'news' => $news,
	        'projects' => $projects,
            'services' => $services,
            'departments' => $departments
        ]);
	}

	public function search()
    {
        $this->meta = new \stdClass();
        $this->meta->title_en = 'Search lawyer';
        $this->meta->title_ru = 'Поиск юриста';
        $this->meta->description_en = 'Search lawyer';
        $this->meta->description_ru = 'Поиск юриста';
        $this->meta->keywords_en = 'Search lawyer';
        $this->meta->keywords_ru = 'Поиск юриста';
        $this->meta->url = '/search/';

        $services = api::get('services/getActive');
        $departments = api::get('departments/getActive');

        $lawyers = api::get('lawyers/search', [
            'service_id' => isset($_GET['service'])?$_GET['service']:'',
            'department_id' => isset($_GET['department'])?$_GET['department']:'',
            'keyword' => isset($_GET['keyword'])?$_GET['keyword']:''
        ]);

        $this->render('search', [
            'lawyers' => $lawyers,
            'services' => $services,
            'departments' => $departments
        ]);
    }

	public function subscribe()
	{
		if (validate::email($_POST['email']) && $_POST['policy'] == 'on') {
		    $_POST['themes'] = isset($_POST['themes']) ? implode(', ', $_POST['themes']) : '';

			$result = api::get('subscribers/add', $_POST);
			if (empty($result->error)){
				echo json_encode(['success' => $result]);
			} else {
				echo json_encode(['error' => $result->error]);
			}

		} else {
			header('HTTP/1.1 406 Not Acceptable');
			exit();
		}
	}

	public function sendSummary()
	{
		if (isset($_FILES['files'])) {
			$img_dir = '/summaries';
			$file = '';

			if (!is_dir(ROOT.'/public/media'.$img_dir)) {
				mkdir(ROOT.'/public/media'.$img_dir, 0776, true);
			}

			$extension = strtolower(strrchr($_FILES['files']['name'][0], '.'));
			$_FILES['files']['name'][0] = md5_file($_FILES['files']['tmp_name'][0]).$extension;

			if (move_uploaded_file($_FILES['files']['tmp_name'][0], ROOT.'/public/media'.$img_dir.'/'.$_FILES['files']['name'][0])) {
				$file = $_FILES['files']['name'][0];
			}

			$_POST['file'] = '/media'.$img_dir.'/'.$file;
		}

		if (validate::string($_POST['first_name'], ['required' => true])
			&& validate::string($_POST['last_name'], ['required' => true])
			&& validate::string($_POST['middle_name'], ['required' => true])
			&& validate::string($_POST['salary'], ['required' => true])) {

		    $service = isset($_POST['service'])?$_POST['service']:'не указано';
		    $file_path = isset($_POST['file'])? '@' . ROOT.'/public' . $_POST['file'] : '';
		    //$curl_file = isset($_POST['file'])? new \CurlFile($file_path, mime_content_type($file_path), $file) : '';

		    $result = potok::post('https://app.potok.io/api/v2/applicants', [
                'applicant[first_name]' => $_POST['first_name'],
                'applicant[last_name]' => $_POST['last_name'],
                'applicant[middle_name]' => $_POST['middle_name'],
                'applicant[address]' => $service,
                'applicant[salary]' => $_POST['salary'],
                'applicant[cv]' => $file_path,
            ]);

		    if (!empty($result)&&!empty($result->id)){
                echo json_encode(['success' => $result->id]);
            } else {
                echo json_encode(['error' => 'error encountered']);
            }
		    /*
			$result = api::get('summaries/add', $_POST);

			if (empty($result->error)){
				echo json_encode(['success' => $result]);
			} else {
				echo json_encode(['error' => 'error encountered']);
			}
		    */
		}
	}

	public function feedback()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (validate::phone($_POST['phone'], ['required' => true])
                && validate::email($_POST['email'], ['required' => true])
            ){

                $name = !empty($_POST['name'])?$_POST['name']:'не указано';
                $message = !empty($_POST['message'])?$_POST['message']:' ';

                $res = api::post('feedback/add', [
                    'name' => $name,
                    'phone' => $_POST['phone'],
                    'email' => $_POST['email'],
                    'message' => $message,
                    'type' => 'message'
                ]);

                if (empty($res->error)) {

                    if (!empty($_POST['lawyer_id'])){

                        if ($_POST['lawyer_id'] == 'manager'){
                            $template = api::get('mailtemplates/get', ['type' => 'manager']);
                            //$template->admin_email = $this->settings->manager_email;
                            $lawyer = new \stdClass();
                            $lawyer->h1_ru = $this->settings->manager_firstname_ru . ' ' . $this->settings->manager_lastname_ru;
                        } else {
                            $template = api::get('mailtemplates/get', ['type' => 'lawyer']);
                            $lawyer = api::get('lawyers/get', ['id' => $_POST['lawyer_id']]);
                        }

                    } elseif (!empty($_POST['direction'])){

                        $template = api::get('mailtemplates/get', ['type' => $_POST['direction']]);

                    } else {
                        $template = api::get('mailtemplates/get', ['type' => 'message']);
                    }

                    if (!empty($template) && $template->active == 1) {
                        if ($template->sendtoclient == 1 && !empty($template->client_body)) {
                            $title = $template->client_title;
                            $title = str_replace('{NAME}', $name, $title);
                            $title = str_replace('{PHONE}', $_POST['phone'], $title);
                            $title = str_replace('{EMAIL}', $_POST['email'], $title);
                            if (!empty($lawyer)) {
                                $title = str_replace('{LAWYER_NAME}', $lawyer->h1_ru, $title);
                            }
                            $body = $template->client_body;
                            $body = str_replace('{NAME}', $name, $body);
                            $body = str_replace('{PHONE}', $_POST['phone'], $body);
                            $body = str_replace('{EMAIL}', $_POST['email'], $body);
                            $body = str_replace('{MESSAGE}', $message, $body);
                            if (!empty($lawyer)) {
                                $body = str_replace('{LAWYER_NAME}', $lawyer->h1_ru, $body);
                            }
                            api::post('mailqueue/add', [
                                'recipient' => $_POST['email'],
                                'subject' => $title,
                                'body' => $body
                            ]);
                        }

                        if ($template->sendtoadmin == 1 && !empty($template->admin_body) && !empty($template->admin_email)) {
                            $title = $template->admin_title;
                            $title = str_replace('{NAME}', $name, $title);
                            $title = str_replace('{PHONE}', $_POST['phone'], $title);
                            $title = str_replace('{EMAIL}', $_POST['email'], $title);
                            if (!empty($lawyer)) {
                                $title = str_replace('{LAWYER_NAME}', $lawyer->h1_ru, $title);
                            }
                            $body = $template->admin_body;
                            $body = str_replace('{NAME}', $name, $body);
                            $body = str_replace('{PHONE}', $_POST['phone'], $body);
                            $body = str_replace('{EMAIL}', $_POST['email'], $body);
                            $body = str_replace('{MESSAGE}', $message, $body);
                            if (!empty($lawyer)) {
                                $body = str_replace('{LAWYER_NAME}', $lawyer->h1_ru, $body);
                            }
                            api::post('mailqueue/add', [
                                'recipient' => $template->admin_email,
                                'subject' => $title,
                                'body' => $body
                            ]);
                        }
                    }

                    echo json_encode(['success' => $res]);
                } else {
                    echo json_encode(['error' => 'error encountered']);
                }

            } else {
                header('HTTP/1.1 406 Not Acceptable');
                exit();
            }
        } else {
            header('HTTP/1.1 405 Method Not Allowed');
            exit();
        }
    }

    public function cron()
    {
        $newsletters = api::get('mailqueue/getList');
        if (!empty($newsletters)){
            foreach ($newsletters as $newsletter){
                $res = $this->sendEmail($newsletter->recipient, $newsletter->subject, $newsletter->body, $newsletter->mass);
                if ($res && empty($res['error'])){
                    api::get('mailqueue/delete', ['id' => $newsletter->id]);
                }
                sleep(2);
            }
        }
    }

    public function getProjects()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (validate::int($_POST['department'], ['required' => true])){
                $result = api::get('projects/getByDepartmentId', ['department_id' => $_POST['department']]);
                echo json_encode($result);
                exit();
            } else {
                header('HTTP/1.1 406 Not Acceptable');
                exit();
            }
        } else {
            header('HTTP/1.1 405 Method Not Allowed');
            exit();
        }
    }

    public function putcomment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (validate::int($_POST['id'], ['required' => true]) &&
                validate::string($_POST['name'], ['required' => true]) &&
                validate::string($_POST['comment'], ['required' => true])
            ){
                if (!empty($_POST['g-recaptcha-response'])){
                    $params = [
                        'secret' => '6LdZxUMUAAAAAJkW2FG02yCHHvQc4vzZYINmzGV0',
                        'response' => $_POST['g-recaptcha-response'],
                    ];

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $resp = curl_exec($ch);
                    curl_close($ch);

                    $resp = json_decode($resp);

                    if ($resp->success) {
                        $result = api::get('comments/add', [
                            'name' => $_POST['name'],
                            'text' => $_POST['comment'],
                            'article_id' => $_POST['id'],
                            'lang' => !empty($_POST['lang'])?$_POST['lang']:'ru'
                        ]);
                        if (!empty($result) && empty($result['error'])){
                            echo json_encode(['success' => $result]);
                            exit();
                        } else {
                            header('HTTP/1.1 406 Not Acceptable');
                            exit();
                        }

                    } else {
                        header('HTTP/1.1 406 Not Acceptable');
                        exit();
                    }
                } else {
                    header('HTTP/1.1 406 Not Acceptable');
                    exit();
                }
            } else {
                header('HTTP/1.1 406 Not Acceptable');
                exit();
            }
        } else {
            header('HTTP/1.1 405 Method Not Allowed');
            exit();
        }
    }

    public function vcard()
    {
        if (!empty($_REQUEST['id'])){
            if ($_REQUEST['id'] == 'manager'){
                $lawyer = new \stdClass();
                $lawyer->active = 1;
                $lawyer->email = $this->settings->manager_email;
                $lawyer->firstname_ru = $this->settings->manager_firstname_ru;
                $lawyer->lastname_ru = $this->settings->manager_lastname_ru;
                $lawyer->middlename_ru = $this->settings->manager_middlename_ru;
                $lawyer->position_ru = $this->settings->manager_position_ru;
                $lawyer->firstname_en = $this->settings->manager_firstname_en;
                $lawyer->lastname_en = $this->settings->manager_lastname_en;
                $lawyer->middlename_en = $this->settings->manager_middlename_en;
                $lawyer->position_en = $this->settings->manager_position_en;
            } else {
                $lawyer = api::get('lawyers/get', ['id' => $_REQUEST['id']]);
            }
            if ( !empty($lawyer)&&($lawyer->active)) {
                header("Content-type: text/vcard");
                header("Content-Disposition: attachment; filename=vcard.vcf");
                $company = $this->lang=='en'?'Infralex':mb_convert_encoding( 'Инфралекс', 'Windows-1251', 'UTF-8');
                if ($this->lang == 'ru'){
                    $lawyer->firstname_ru = mb_convert_encoding( $lawyer->firstname_ru, 'Windows-1251', 'UTF-8');
                    $lawyer->middlename_ru = mb_convert_encoding( $lawyer->middlename_ru, 'Windows-1251', 'UTF-8');
                    $lawyer->lastname_ru = mb_convert_encoding( $lawyer->lastname_ru, 'Windows-1251', 'UTF-8');
                    $lawyer->position_ru = mb_convert_encoding( $lawyer->position_ru, 'Windows-1251', 'UTF-8');
                    echo "BEGIN:VCARD\r\n" .
                        "VERSION:4.0\r\n".
                        "FN:".$lawyer->firstname_ru." ".$lawyer->middlename_ru." ".$lawyer->lastname_ru. "\r\n".
                        "N:".$lawyer->lastname_ru.";".$lawyer->firstname_ru.";".$lawyer->middlename_ru. "\r\n".
                        "ORG:".$company."\r\n".
                        "URL:http://infralex.ru\r\n".
                        "TEL;TYPE=work,voice;VALUE=uri:tel:".$this->settings->phone."\r\n".
                        "EMAIL:".$lawyer->email."\r\n".
                        "TITLE:".$lawyer->position_ru."\r\n".
                        "END:VCARD";
                } else {
                    echo "BEGIN:VCARD\r\n" .
                        "VERSION:4.0\r\n".
                        "FN:".$lawyer->firstname_en." ".$lawyer->middlename_en." ".$lawyer->lastname_en. "\r\n".
                        "N:".$lawyer->lastname_en.";".$lawyer->firstname_en.";".$lawyer->middlename_en. "\r\n".
                        "ORG:".$company."\r\n".
                        "URL:http://infralex.ru\r\n".
                        "TEL;TYPE=work,voice;VALUE=uri:tel:".$this->settings->phone."\r\n".
                        "EMAIL:".$lawyer->email."\r\n".
                        "TITLE:".$lawyer->position_en."\r\n".
                        "END:VCARD";
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
        } else {
            header('HTTP/1.1 406 Not Acceptable');
            exit();
        }
    }
}
