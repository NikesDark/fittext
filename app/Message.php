<?php

namespace App {

    use Illuminate\Database\Eloquent\Model;

    class Message extends Model
    {
        protected $table = 'messages';
        protected $fillable = [
            'messages'
        ];

        /**
         * @param $phoneNumber
         * @param $messageText
         */
        public static function sendMessage($phoneNumber, $messageText)
        {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.infobip.com/sms/1/text/single');
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $json_array = [
                "to" => "$phoneNumber",
                "text" => "$messageText",
                "from" => "14158150166"
            ];
            $body = json_encode($json_array);

            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                    "Accept: application/json",
                    "Authorization: Basic Rml0VGV4dDpTRCZmM3BvVw==",
                    "Content-Type: application/json; charset=UTF-8",
                ]
            );

            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

            $resp = curl_exec($ch);

            if(!$resp) {
                die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
            } else {
                echo "Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE);
                echo "\nResponse HTTP Body : " . $resp;
            }
            curl_close($ch);
        }







    }
}