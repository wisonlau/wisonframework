<?php
use core\lib\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function() {
    echo 'Hello world!';
});

Route::get('/test', 'app\Http\Controllers\SiteController@test');
Route::get('/view', 'app\Http\Controllers\SiteController@view');

Route::get('/test/(:num)', 'app\Http\Controllers\SiteController@zz');

Route::get('/test/t/(:any)', function($slug) {
    echo 'The slug is: ' . $slug;
});


Route::error(function() {
    // throw new Exception("404 Not Found");
    echo '404 :: Not Found';
});

Route::dispatch();