<?php
namespace core;

class medium
{
    const HOST = "https://api.medium.com/";
    const API_KEY = "XXX";
    const USER_ID = "YYY";

    public static function createPost($data)
    {
        return self::request('POST', '/users/'.self::USER_ID.'/posts', $data);
    }

    private static function request($method, $uri, $params = false)
    {
        $ch = curl_init();

        $url = self::HOST."v1/". $uri.(($method == 'GET' && !empty($params))?'?'.http_build_query($params):'');

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-type: application/json; charset=utf-8",
            "Authorization: Bearer ".self::API_KEY
        ]);

        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        switch ($method) {
            case 'POST':
                curl_setopt($ch, CURLOPT_POST, 1);
                if (!empty($params)) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
                } else {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");
                }
                break;
        }

        echo "Request: $url\n";
        echo "Params: ".json_encode($params)."\n";
        $resp = curl_exec($ch);
        echo "Response: ".$resp."\n";

        if ($resp) {
            $resp = json_decode($resp);
        } else {
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($http_code >= 200 &&  $http_code <= 300) {
                return true;
            }
        }

        curl_close($ch);
        return $resp;
    }
}