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
Route::get('/checkcode','Login\LoginController@checkcode');
Route::get('/wx','Login\LoginController@wx');

Route::get('/login','Login\LoginController@login');
Route::post('/login/logindo','Login\LoginController@logindo');

Route::get('/login/code','Login\LoginController@code');

Route::get('/login/qrcode','Login\LoginController@qrcode');


Route::get('/','Login\LoginController@index');

Route::get('/sousuo','Login\LoginController@sousuo');

Route::get('/detail','Login\LoginController@detail');
Route::get('/index/found','Login\LoginController@found');

Route::get('/oauth','Login\LoginController@oauth');
Route::get('/login2','Login\LoginController@login2');

//注册
Route::get('/reg','Login\LoginController@reg');
Route::post('/login/regdo','Login\LoginController@regdo');

Route::post('/reg/span_tel','Login\LoginController@span_tel');





