<?php

use App\Http\Controllers\AraayController;
use Illuminate\Support\Facades\Route;

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


Route::get('/user', [AraayController::class ,'showArray']);
// Route::get('posts/creat{id}', [TestController::class ,'CreateMethod']);
// Route::get('posts/edit{id}', [TestController::class ,'editMethod']);
// Route::get('posts/delete{id}', [TestController::class ,'deleteMethod']);

Route::get('/', function () {
    $array1 = [ 'Alaa' ,'Mona', 'Mhamd', 'Mahmood', 'Talab', 'Ruba' , 'Naser'];
    return view('welcome', ['array1' => $array1]);
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



