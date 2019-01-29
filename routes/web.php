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
//para poder subir...
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

Route::post('/save-category', array( 
'as'=>'saveEventCategory',
'uses'=> 'CategoryEventController@save'
));

Route::get('/create-Category', array(
	'as'=> 'createEventCategory',
	'uses'=> 'CategoryEventController@create'
));

Route::get('/edit-Category/{category}', array(
	'as'=> 'editEventCategory',
	//'middleware' => 'auth',
	'uses'=>'CategoryEventController@edit'
));

Route::post('/update-category/{category}', array(
	'as'=> 'updateEventCategory',
	'uses'=> 'CategoryEventController@update'
));

Route::get('/delete-category/{category}', array (
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

Route::post('/edit-Category/{category}', array(
	'as'=> 'editFinanceCategory',
	//'middleware' => 'auth',
	'uses'=>'CategoryFinanceMoveController@edit'
));

Route::post('/update-category/{category}', array(
	'as'=> 'updateFinanceCategory',
	'uses'=> 'CategoryFinanceMoveController@update'
));

Route::get('/delete-category/{category}', array (
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

Route::get('/edit-Category/{category}', array(
	'as'=> 'editStatusCategory',
	//'middleware' => 'auth',
	'uses'=>'CategoryStatusController@edit'
));

Route::post('/update-category/{category}', array(
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