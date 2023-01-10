<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

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

Route::get('/', function () {
    $array = ['Mona', 'Alaa', 'Mhamd', 'Mahmood', 'Talab', 'Ruba' , 'Naser'];
    return view('welcome', ['array' => $array]);
});

Route::get('profile' /* this is path */ , function () {
    return view('profile' ); // file name
});

Route::get('about' /* this is path */ , function () {
    return view('about' ); // file name
});

Route::get('contact' /* this is path */ , function () {
    return view('contact' ); // file name
});

Route::get('user' /* this is path */ , function () {
    return view('user' ); // file name
});



