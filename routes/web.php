<?php

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
    return view('welcome');
});

Route::post('/', 'MailController@sendEmail');

Route::get('/register', 'MainController@registerView');

Route::post('/register', 'MainController@register');

Route::get('/locale/{locale}', 'MainController@locale');
