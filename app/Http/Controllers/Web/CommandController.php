<?php

namespace App\Http\Controllers\Web;

use App\Exceptions;


class CommandController {
    public static function exec(array $arr): string {
        $out = "";
        foreach ($arr as $value) {
            $split = explode(" ", $value);
            try {
                $out .= CommandController::prepare(...$split).PHP_EOL;
            } catch (Exceptions\WrongInputException $e){
                $out .= $e->getMessage();
                break;
            }
        }
        return $out;
    }

    /**
     * @throws Exceptions\WrongInputException
     */
    private static function prepare(string $act, string ...$args): string {
        if (count($args) < 1) {
            error_log("wrong input $act".implode(" ", $args));
            throw new Exceptions\WrongInputException("wrong input: $act".implode(" ", $args));
        }
        $act = trim($act);

        $server = 0;
        if (count($args) > 2) {
            $server = $args[count($args)-1];
            array_pop($args);
        }

        $key = array_shift($args);
        if ($act == "get") {
            return CommandController::get($key, $server);
        } else if ($act == "set")  {
            return CommandController::set($key, $args[0], $server);
        } else {
            return "unknown action";
        }

    }

    private static function get(string $key, int $server): string {
        // http request to localhost:890/get

        //open connection
        $ch = curl_init();

        $fields = [
            'key' => $key,
            'server' => $server,
        ];

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, "127.0.0.1:890/get");
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        return "$key:".curl_exec($ch);
    }

    private static function set(string $key, string $value, int $server): string {
        // rest stuff

        //open connection
        $ch = curl_init();

        $fields = [
            'key' => $key,
            'value' => $value,
            'server' => $server,
        ];

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, "127.0.0.1:890/set");
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($fields));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        return "$key saved to $server";
    }
}
