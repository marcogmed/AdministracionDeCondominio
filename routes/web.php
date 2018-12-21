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

Route::post('/save-category', array( 
'as'=>'saveCategory',
'uses'=> 'CategoryEventController@save'
));

Route::get('/create-Category', array(
	'as'=> 'createCategory',
	'uses'=> 'CategoryEventController@create'
));

Route::get('/edit-Category/{category}', array(
	'as'=> 'editCategoryEvent',
	//'middleware' => 'auth',
	'uses'=>'CategoryEventController@edit'
));

Route::post('/update-category/{category}', array(
	'as'=> 'updateCategory',
	'uses'=> 'CategoryEventController@update'
));

Route::get('/delete-category/{category}', array (
	'as' => 'deleteCategory',
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