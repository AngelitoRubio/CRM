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


Route::group(['middleware' => 'guest'], function () {
	Route::get('/', 'Auth\AuthController@getLogin');
	Route::get('/login', ['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
	Route::post('login', 'Auth\AuthController@postLogin');		
});


Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::group(['middleware' => 'auth'], function () {	

	Route::resource('dashboard','DashboardController');
	
	Route::resource('roles','RoleController');
	Route::resource('company','CompanyController');	
	Route::resource('users','UserController');
	Route::resource('adstype','AdsTypeController');
	Route::resource('itemtype','ItemTypeController');
	Route::resource('itemtype','ItemTypeController');

	Route::resource('ads','AdsController');
	Route::get('ads/{id}/view',['as'=>'ads.view','uses'=>'AdsController@view']);
	
	Route::resource('adsapprover','AdsApproverController');

	Route::get('ads_forapproval','AdsApproverController@forapproval');
	Route::post('ads/stat_update','AdsApproverController@stat_update');

	
	Route::resource('people_count','Api\PeopleCountController');
	Route::post('people_count/details',['as'=>'people_count.details','uses'=>'Api\PeopleCountController@details']);	
	Route::resource('branches','BranchController');
});

