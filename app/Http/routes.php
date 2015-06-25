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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('register/summoner', 'SummonerController@store');

Route::post('team/create', 'TeamController@store');
Route::get('team/leave', 'TeamController@check');
Route::get('team/destroy/{user_id}', 'TeamController@destroy');
Route::get('team/delete', 'TeamController@delete');
Route::get('team/invite/{user_id}', 'TeamController@invite');
Route::post('team/edit/{team_id}', 'TeamController@edit');
Route::get('team/addmember/{user_id}/{team_id}', 'TeamController@update');
Route::get('team/delete-alert/{id}', 'TeamController@deleteAlert');
Route::get('team/cancel-invite/{user_id}', 'TeamController@deleteAlertByUserId');


Route::get('admin', 'AdminController@index');