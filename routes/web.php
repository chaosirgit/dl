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
Route::get('/',function(){
    return view('welcome');
});
Route::group(['prefix' => 'admin'],function(){

    Route::get('/login','Admin\DefaultController@login');           //后台登陆界面
    Route::post('/login','Admin\DefaultController@loginPost');      //处理登陆提交
    Route::get('/index','Admin\DefaultController@index');           //后台界面
    Route::get('/main','Admin\DefaultController@main');             //面板界面
    Route::get('/form','Admin\DefaultController@form');             //表单
});
