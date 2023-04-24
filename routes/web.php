<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/**
 * @throws Exception
 */
function prepare(string $key, string ...$args): string {
    if (count($args) < 2) {
        throw new Exception("wrong input");
    }

    $server = 0;
    if (count($args) > 2) {
        $server = $args[count($args)-1];
    }

    return $key;
}

function get(string $key, int $server): string {
    return $key;
}

Route::any('/', function () {
    if (isset($_POST["submit"])) {
        $cmd = $_POST["cmd"];
        $split = explode(" ", $cmd);
        echo get(...$split);
    }
    return view('welcome');
});

