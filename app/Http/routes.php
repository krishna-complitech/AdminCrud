<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 Route::get('/','WelcomeController@index');
Route::get('home','WelcomeController@home');
Route::get('post','post\PostController@index');
Route::post('post/add','post\PostController@store');
Route::get('post/view','post\PostController@view');
Route::get('post/{id}/edit', 'post\PostController@edit');
Route::patch('post/update/{id}', 'post\PostController@update');

Route::get('event','admin\event\EventController@index');
Route::post('event/edit/{id}','admin\event\EventController@edit');
Route::post('event/add','admin\event\EventController@store');
Route::get('event/view','admin\event\EventController@view');
Route::patch('event/update/{id}', 'admin\event\EventController@update');

Route::get('sendmsg','admin\sendmsg\SendmsgController@index');
Route::post('sendmsg/store','admin\sendmsg\SendmsgController@store');

Route::get('admin','AdminController@index');
Route::get('user','UserController@index');

Route::get('brain','admin\braintree\BraintreeController@index');
Route::post('create_transaction','admin\braintree\BraintreeController@store');

//Route::get('welcome',['middleware'=>'role','uses'=>'WelcomeController@index']);
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('auth/login','Auth\AuthController@getLogin');    
Route::post('auth/login',['uses'=>'Auth\AuthController@postLogin']);
Route::get('auth/register','Auth\AuthController@getregister');
Route::post('auth/register','Auth\AuthController@postregister');
Route::get('auth/logout','Auth\AuthController@getLogout');
//Route::controllers(['auth'=>'Auth\AuthController',
//                    'password'=>'Auth\PasswordController']);
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
  

Route::group(['middleware' => ['web']], function () {
 
});