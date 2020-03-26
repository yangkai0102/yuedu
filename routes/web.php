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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/wx','Login\LoginController@wx');

Route::get('/','Login\LoginController@login');
Route::post('/login/logindo','Login\LoginController@logindo');

Route::get('/login/code','Login\LoginController@code');

Route::get('/login/qrcode','Login\LoginController@qrcode');


Route::get('/index','Login\LoginController@index');

Route::get('/oauth','Login\LoginController@oauth');
Route::get('/login2','Login\LoginController@login2');

//注册
Route::post('/reg','Login\LoginController@reg');




