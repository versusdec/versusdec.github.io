<?php
namespace controllers;
use core\controller;
use core\mail;

class cron extends controller
{
    public function index()
    {
        if (!empty($_GET['key'])&&$_GET['key']=='f439858c'){

            $newsletters = $this->api->call('mailqueue.getList', []);
            if ($newsletters['items']){
                $newsletters = $newsletters['items'];
                foreach ($newsletters as $newsletter){
                    $res = mail::send(
                        $this->settings,
                        $newsletter['recipient'],
                        $newsletter['subject'],
                        $newsletter['body'],
                        $newsletter['mass']
                    );
                    if ($res && empty($res['error'])){
                        $this->api->call('mailqueue.delete', ['id' => $newsletter['id']]);
                        echo 'DONE';
                    }
                }
            }           
            

        } else {
            $this->handleNotFound();
        }
    }

    private function handleNotFound()
    {
        header('HTTP/1.1 404 Not Found');
        $this->meta['title'] = $this->settings['not_found_title'];
        $this->meta['description'] = $this->settings['not_found_desc'];
        $this->meta['keywords']  = $this->settings['not_found_keywords'];
        $this->render('404', []);
    }
}