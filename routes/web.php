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

Route::get('/categories', array(
	'as'=>'categories',
	//'middleware' => 'auth',
	'uses' => 'CategoryController@index' 
));

Route::post('/save-category', array( 
'as'=>'saveCategory',
'uses'=> 'CategoryController@save'
));

Route::get('/create-Category', array(
	'as'=> 'createCategory',
	'uses'=> 'CategoryController@create'
));

Route::get('/edit-Category/{category}', array(
	'as'=> 'editCategory',
	//'middleware' => 'auth',
	'uses'=>'CategoryController@edit'
));

Route::post('/update-category/{category}', array(
	'as'=> 'updateCategory',
	'uses'=> 'CategoryController@update'
));

Route::get('/delete-category/{category}', array (
	'as' => 'deleteCategory',
	'uses' => 'CategoryController@destroy'
));
