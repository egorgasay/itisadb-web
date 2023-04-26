<?php

namespace App\Http\Controllers\Web;


class ServersController {
    public static function get(): string {
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, "127.0.0.1:890/servers");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        return curl_exec($ch);
    }
}
