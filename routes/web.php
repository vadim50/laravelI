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

Route::get('user/{id}',function($id){
	return 'User'.$id;
});

Route::get('cat_{id?}',function($name){
	echo '<h1>'.$name.'</h1>';
});

Route::get('id/{i?}',['uses'=>'UserController@action'])->where('i','[0-9]+');


Route::post('/form',['uses'=>'UserController@form']);

Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');