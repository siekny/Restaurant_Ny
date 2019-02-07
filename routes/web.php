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

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomePageController@index')->name('homepage');
Route::get('/admin', 'HomeController@index')->name('homeadmin');
Route::get('/admin.foodmenu', 'Admin\FoodMenuController@index')->name('adminfoodmenu');
Route::get('/admin.booktable', 'Admin\BookTableController@index')->name('adminbooktable');
Route::get('/admin.foodblog', 'Admin\FoodBlogController@index')->name('adminfoodblog');

Route::get('/admin.foodblog.add', 'Admin\FoodBlogController@addview')->name('foodblog_Add');
Route::POST('/admin.foodblog.add', 'Admin\FoodBlogController@store')->name('foodblogAdd');
Route::get("/admin.foodblog.view/{id}", 'Admin\FoodBlogController@view')->name('foodblogview');
Route::get("/admin.foodblog.edit/{id}", 'Admin\FoodBlogController@edit')->name('foodblogedit');
Route::POST("/admin.foodblog.edit/{id}", 'Admin\FoodBlogController@update')->name('foodblogupdate');
Route::POST('/admin.foodblog.delete/{id}', 'Admin\FoodBlogController@delete')->name('foodblogdelete');