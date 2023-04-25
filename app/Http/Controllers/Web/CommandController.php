<?php

namespace App\Http\Controllers\Web;

use Api;
use App\Api\BalancerClient;
use App\Api\BalancerGetRequest;
use Grpc;

class CommandController {
    public static function exec(array $arr): string {
        $out = "";
        foreach ($arr as $value) {
            $split = explode(" ", $value);
            $out .= CommandController::prepare(...$split)."<br>";
        }
        return $out;
    }

    /**
     * @throws Exception
     */
    private static function prepare(string $act, string ...$args): string {
        if (count($args) < 2) {
            return implode(" ", $args);
            // throw new Exception("wrong input");
        }
        $act = trim($act);

        $server = 0;
        if (count($args) > 2) {
            $server = $args[count($args)-1];
            array_pop($args);
        }

        $key = array_pop($args);
        if ($act == "get") {
            return CommandController::get($key, $server);
        } else if ($act == "set")  {
            return CommandController::set($key, $args[0], $server);
        } else {
            return "unknown action";
        }

    }

    private static function get(string $key, int $server): string {
        // grpc stuff
        $client = new BalancerClient("127.0.0.1:800", [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);
        $request = new BalancerGetRequest();
        $request -> setKey($key);
        list($response, $status) = $client->Get($request)->wait();
        if ($status->code !== Grpc\STATUS_OK) {
            echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
            exit(1);
        }
        echo implode("", $response)."<br>";
        return "ok get $key from $server";
    }

    private static function set(string $key, string $value, int $server): string {
        // gen-grpc stuff
        return "ok set $key - $value to $server";
    }
}
