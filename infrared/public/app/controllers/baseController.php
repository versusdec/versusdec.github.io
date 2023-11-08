<?php

namespace controllers;
use core\api;
use core\controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class baseController extends controller
{
	public $meta;
	public $menu;
	public $page;
	public $settings;
    public $lang;
	public $specialization;
	public $department;
	public $rss;

    private function generateCookie($length = 15)
    {
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($length / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
        } else {
            return preg_replace_callback('/[xy]/',
                function ($matches){
                    return dechex('x' == $matches[0] ? mt_rand(0, 15) : (mt_rand(0, 15) & 0x3 | 0x8));
                }, 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx');
        }
        return substr(bin2hex($bytes), 0, $length);
    }
	
	public function __construct($meta = null, $lang= 'ru', $page = false)
	{
		$this->meta = $meta;
		$this->menu = new \stdClass();
		$this->menu->top = api::get('menu/getActive', ['type' => 'top']);
		$this->menu->bottom = api::get('menu/getActive', ['type' => 'bottom']);
		$this->settings = api::get('settings/getAll');
		$this->page = $page;
        $this->lang = $lang;
        $this->rss = '';
	}

    public function stripPhoneNumber($number){
        $chrs = array("(",")","-"," ");
        return str_replace($chrs,'',$number);
    }

    public function sendEmail($recipient, $subject, $body, $isMass, $fromName = '')
    {
        include_once ROOT.'/public/app/core/PHPMailer/PHPMailer.php';
        include_once ROOT.'/public/app/core/PHPMailer/SMTP.php';
        include_once ROOT.'/public/app/core/PHPMailer/Exception.php';

        if (empty($fromName)){
            $fromName = $this->settings->sender_name;
        }

        $mail = new PHPMailer(true);

        try {
            //$mail->SMTPDebug = 2; //SMTP::DEBUG_SERVER
            $mail->SMTPDebug = 0; //SMTP::DEBUG_OFF
            $mail->isSMTP();
            $mail->Host = $this->settings->sender_host;
            $mail->SMTPAuth = true;
            $mail->Username = $this->settings->sender_email;
            $mail->Password = $this->settings->sender_password;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = $this->settings->sender_port;
            $mail->setFrom($this->settings->sender_email, $fromName);
            $addresses = explode(',', $recipient);
            foreach ($addresses as $address) {
                if ($isMass){
                    $mail->AddBCC( trim($address) );
                } else {
                    $mail->addAddress(trim($address));
                }
            }
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->send();
            return true;
        } catch (Exception $e) {
            return ['error' => $mail->ErrorInfo];
        }
    }
}