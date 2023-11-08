<?php
namespace core;

class sendgrid
{
    const HOST = "https://api.sendgrid.com/";
    const API_KEY = "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";

    public static function sendSubscription($subject, $body, $recipients)
    {
        $to_emails = [];


        $data = [
            "personalizations" => [],
            "from" => [
                "email" => "daemon.itm@ro.ru",
                "name" => "Infralex"
            ],
            "subject" => $subject,
            "content" => [
                "type" => "text/html",
                "value" => $body
            ]
        ];

        return self::request('POST', 'mail/send', $data);
    }

    public static function deleteContact($id)
    {
        return self::request('DELETE', 'marketing/contacts?ids=' . $id);
    }

    public static function getContactByEmail($email)
    {
        $data = [
            "query" => "primary_email LIKE '{$email}%'"
        ];

        return self::request('PUT', 'marketing/contacts/search', $data);
    }

    public static function addContact($email, $first_name, $last_name, $company, $position, $list_ids)
    {
        $contact = new \stdClass();
        $contact->email = $email;
        $contact->first_name = $first_name;
        $contact->last_name = $last_name;
        $contact->company = $company;
        $contact->position = $position;

        $contacts = [];
        $contacts[] = $contact;

        $data = [
            "list_ids" => explode(',', $list_ids),
            "contacts" => $contacts
        ];

        return self::request('PUT', 'marketing/contacts', $data);
    }

    public static function addMarketingList($name)
    {
        return self::request('POST', 'marketing/lists', ['name' => $name]);
    }

    public static function getTemplates()
    {
        return self::request('GET', 'templates')->templates;
    }

    public static function sendEmail($email, $from, $template_id)
    {
        $data = [
            "personalizations"=> [
                [
                    "to" => [
                        [
                            "email"=> $email
                        ]
                    ]
                ]
            ],
            "from" => $from,
            "template_id" => $template_id,
        ];

        return self::request('POST', 'mail/send', $data);
    }

    public static function addSubscriber($email, $themes)
    {
        $recipient = new \stdClass();
        $recipient->email = $email;
        $recipient->themes = $themes;
        $data = [];
        $data[] = $recipient;

        return self::request('POST', 'contactdb/recipients', $data);
    }

    private static function request($method, $uri, $params = false)
    {
        $ch = curl_init();

        $url = self::HOST."v3/". $uri.(($method == 'GET' && !empty($params))?'?'.http_build_query($params):'');

        curl_setopt($ch, CURLOPT_URL, $url);

        /*
         * https://github.com/sendgrid/sendgrid-csharp/issues/910
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-type: application/json; charset=utf-8",
            "Authorization: Bearer ".self::API_KEY
        ]);
        */
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-type: application/json",
            "Authorization: Bearer ".self::API_KEY
        ]);

        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        switch ($method) {
            case 'PUT':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                if (!empty($params)) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
                } else {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");
                }
                break;
            case 'DELETE':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                curl_setopt($ch, CURLOPT_POSTFIELDS, "{}");
                break;
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