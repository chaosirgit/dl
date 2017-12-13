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

Route::get('admin/login','Admin\DefaultController@login');           //后台登陆界面
Route::post('admin/login','Admin\DefaultController@loginPost');      //处理登陆提交

Route::group(['prefix' => 'admin','middleware'=>['admin']],function(){

    Route::get('/index','Admin\DefaultController@index');           //后台界面
    Route::get('/form','Admin\DefaultController@form');             //表单
    Route::get('/welcome','Admin\DefaultController@welcome');       //主界面
    Route::get('/news','Admin\DefaultController@news');             //新闻列表
    Route::get('/letter','Admin\DefaultController@letter');         //文学天地
    Route::get('/about','Admin\DefaultController@about');           //联系我们
    Route::get('/category','Admin\DefaultController@category');     //产品分类
    Route::get('/goods','Admin\DefaultController@goods');           //产品列表
    Route::get('/banner','Admin\DefaultController@banner');         //轮播图列表
    Route::post('/delall','Admin\DefaultController@delall');        //批量删除
    Route::get('/newsAdd','Admin\DefaultController@newsAdd');       //添加新闻
    Route::post('/newsAdd','Admin\DefaultController@doNewsAdd');    //添加新闻
    Route::get('/newsEdit','Admin\DefaultController@newsEdit');     //编辑新闻
    Route::post('/uploadImage','Admin\DefaultController@uploadImage'); //上传图片
});
