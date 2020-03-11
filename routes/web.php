<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/items', 'PagesController@items')->name('items');
Route::get('/models', 'PagesController@models')->name('models');
Route::get('/', 'PagesController@brands')->name('brands');
Route::get('/add_brands', 'PagesController@add_brands')->name('add_brands');

Route::post('/add_brands', 'ProductController@add')->name('add');
Route::post('/edit_brand/{id}', 'ProductController@edit_brand')->name('edit_brand');
Route::post('/delete_brand/{id}', 'ProductController@delete_brand')->name('delete_brand');

Route::post('/add_model', 'ModelsController@add_model')->name('add_model');
Route::post('/edit_model/{id}', 'ModelsController@edit_model')->name('edit_model');
Route::post('/delete_model/{id}', 'ModelsController@delete_model')->name('delete_model');

Route::post('/add_item', 'ItemController@add_item')->name('add_item');
Route::post('/edit_item/{id}', 'ItemController@edit_item')->name('edit_item');
Route::post('/delete_item/{id}', 'ItemController@delete_item')->name('delete_item');

Route::get('/edit_brands', 'ProductController@edit_brands')->name('edit_brands');
