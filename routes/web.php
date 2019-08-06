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

Route::get('/','IndexController@index');
Route::get('/m','IndexController@mindex');

Route::get('/open/{id}','OpenController@index');
Route::get('/interface/{id}','OpenController@data');
Route::get('/m/open/{id}','OpenController@mindex');

Route::get('/cl',function(){
	return view('cl');
});
Route::match(['get','post'],'cl/{id}','ClController@cl');

Route::get('/zoushi','TrendController@index');
Route::get('/zoushi/{id}/{num}','TrendController@getdata')->where('num','\d+');

Route::prefix('webinfo')->group(function(){
	Route::get('gywm',function(){
		return view('/webinfo/gywm');
	});
	Route::get('kfzx',function(){
		return view('/webinfo/kfzx');
	});
	Route::get('swhz',function(){
		return view('/webinfo/swhz');
	});
	Route::get('mzsm',function(){
		return view('/webinfo/mzsm');
	});
});



Route::get('/getdata/{time?}','GetdataController@index');
// Route::prefix('api')->group(function(){
// 	Route::get('/open/{type}/{id}','InterfaceController@current');
// 	Route::get('/history/{type}/{id}/{time}','InterfaceController@history');
// 	Route::get('/trend/{type}/{id}/{number}','InterfaceController@trend')->where('number','\d+');
// 	Route::get('/cl/{type}/{id}','InterfaceController@cl');
// });
