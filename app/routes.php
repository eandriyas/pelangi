<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//link untuk admin login
Route::group(array('prefix'=>'admin'), function(){
	Route::get('login', array('as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin'));
	Route::post('login', array('as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin'));
	Route::get('logout', array('as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout'));

});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	// Route::resource('/', 'AdminPostsController');
	//link untuk admin posts
	Route::get('index', array('as'=> 'admin.posts.index', 'uses'=>'AdminPostsController@index'));
	Route::get('edit/{id}', array('as'=> 'admin.posts.edit', 'uses'=>'AdminPostsController@edit'));
	Route::post('update/{id}', array('as'=> 'admin.posts.update', 'uses'=>'AdminPostsController@update'));
	Route::delete('destroy/{id}', array('as'=> 'admin.posts.destroy', 'uses'=>'AdminPostsController@destroy'));
	Route::get('create', array('as'=> 'admin.posts.create', 'uses'=>'AdminPostsController@create'));
	Route::post('store', array('as'=> 'admin.posts.store', 'uses'=>'AdminPostsController@store'));
	Route::get('posts', array('as'=> 'admin.posts.posts', 'uses'=>'AdminPostsController@posts'));
	Route::get('category', array('as'=> 'admin.posts.category', 'uses'=>'AdminPostsController@category'));
	Route::get('message', array('as'=> 'admin.posts.message', 'uses'=>'AdminPostsController@message'));
	Route::get('user', array('as'=> 'admin.posts.user', 'uses'=>'AdminPostsController@user'));
	Route::get('setting', array('as'=> 'admin.posts.setting', 'uses'=>'AdminPostsController@setting'));

	//link untuk admin kategori
	Route::group(array('prefix'=>'category', 'except'=>'show'), function(){

	// Route::resource('/', 'AdminCategory');	
		Route::get('/', array('as'=>'admin.category.index', 'uses'=>'AdminCategory@index'));
		Route::get('create', array('as'=>'admin.category.create', 'uses'=>'AdminCategory@create'));
		Route::post('store', array('as'=>'admin.category.store', 'uses'=>'AdminCategory@store'));
	});
	//link untuk admin user
	Route::group(array('prefix'=>'user'), function(){
		Route::resource('/', 'AdminUser');
	});
});

Route::get('/', function(){
	return "home";
});




// Route::resource('imgs', 'ImgsController');