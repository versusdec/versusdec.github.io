<?php
namespace core;

class potok
{
    public static function post($uri, $params = [])
    {
        $url = $uri.'?token='.'bd97b3fd2919ccf18cb2478493e70602';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        $resp = curl_exec($ch);

        curl_close($ch);
        return json_decode($resp);
    }
}