<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/age', function () {
    return 19;
});

Route::get('/name', function () {
    return view('name');
});

Route::get('/lname', function () {
    return ;
});

Route::get('/hello', function () {
    return view('hello');
});

Route::post('/array', function ($arr) {
    error_log(request(json_encode($arr)));
});

?>