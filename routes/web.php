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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//******************** Event Categories ********************

Route::get('/categoryEvents', array(
	'as'=>'categoryEvents',
	//'middleware' => 'auth',
	'uses' => 'CategoryEventController@index' 
));

Route::post('/save-category-event', array( 
'as'=>'saveEventCategory',
'uses'=> 'CategoryEventController@save'
));

Route::get('/create-Category-event', array(
	'as'=> 'createEventCategory',
	'uses'=> 'CategoryEventController@create'
));

Route::get('/edit-Category-event/{category}', array(
	'as'=> 'editEventCategory',
	//'middleware' => 'auth',
	'uses'=>'CategoryEventController@edit'
));

Route::post('/update-category-event/{category}', array(
	'as'=> 'updateEventCategory',
	'uses'=> 'CategoryEventController@update'
));

Route::get('/delete-category-event/{category}', array (
	'as' => 'deleteEventCategory',
	'uses' => 'CategoryEventController@destroy'
));


//******************** Category Finance Moves ********************

Route::get('financeCategory', array(
	'as'=>'finaceCategory',
	//'middleware' => 'auth',
	'uses' => 'CategoryFinanceMoveController@index' 
));

Route::get('/create-FinanceCategory', array(
	'as'=> 'createFinanceCategory',
	'uses'=> 'CategoryFinanceMoveController@create'
));

Route::post('/save-finance-category', array( 
'as'=>'saveFinanceCategory',
'uses'=> 'CategoryFinanceMoveController@save'
));

Route::post('/edit-Category-finance/{category}', array(
	'as'=> 'editFinanceCategory',
	//'middleware' => 'auth',
	'uses'=>'CategoryFinanceMoveController@edit'
));

Route::post('/update-category-finance/{category}', array(
	'as'=> 'updateFinanceCategory',
	'uses'=> 'CategoryFinanceMoveController@update'
));

Route::get('/delete-category-finance/{category}', array (
	'as' => 'deleteFinanceCategory',
	'uses' => 'CategoryFinanceMoveController@destroy'
));



//******************** Category Status ********************

Route::get('statusCategory', array(
	'as'=>'statusCategory',
	//'middleware' => 'auth',
	'uses' => 'CategoryStatusController@index' 
));

Route::get('/create-StatusCategory', array(
	'as'=> 'createStatusCategory',
	'uses'=> 'CategoryStatusController@create'
));

Route::post('/save-status-category', array( 
'as'=>'saveStatusCategory',
'uses'=> 'CategoryStatusController@save'
));

Route::get('/edit-Category-status/{category}', array(
	'as'=> 'editStatusCategory',
	//'middleware' => 'auth',
	'uses'=>'CategoryStatusController@edit'
));

Route::post('/update-category-status/{category}', array(
	'as'=> 'updateStatusCategory',
	'uses'=> 'CategoryStatusController@update'
));

Route::get('/delete-category-status/{category}', array (
	'as' => 'deleteStatusCategory',
	'uses' => 'CategoryStatusController@destroy'
));

//****************** Role *******************
Route::get('roles', array(
	'as' => 'roles',
	'uses' => 'RoleController@index'
));

Route::get('crear-rol', array (
	'as' => 'createRole',
	'uses' => 'RoleController@create'
));

Route::post('guardar-rol', array(
	'as' => 'storeRole',
	'uses' => 'RoleController@store'
));

//******************** Places ********************
Route::get('places', array(
	'as' => 'places',
	'uses' => 'PlaceController@index'
));

Route::get('create-place', array(
	'as' => 'createPlace',
	'uses'=> 'PlaceController@create'
));

Route::post('save-place', array(
	'as' => 'savePlace',
	'uses' => 'PlaceController@store'
));