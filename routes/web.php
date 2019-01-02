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
Route::get('/user',function(){
    echo "User";
});
Route::get('/order',"Order\indexController@detail");

//Route::get('/show/{id}','Vip\User@index');
//增  删  改 查
Route::get('/user/add','Vip\User@add');
Route::get('/user/del/{id}','Vip\User@del');
Route::get('/user/update/{id}','Vip\User@update');
Route::get('/user/select','Vip\User@select');
Route::get('/user/list','Vip\User@list');

