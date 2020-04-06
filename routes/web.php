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

Route::view('/', 'welcome')->name('welcome');
Route::view('/about', 'about')->name('about');
Route::resource('portfolio', 'ProjectController')->parameters(['portfolio' => 'project'])->names('projects');
// Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
// Route::post('/portfolio', 'ProjectController@store')->name('projects.store');
// Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');
// Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');
// Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');
// Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');
// Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessageController@store')->name('messages.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UserController@index')->name('users.index');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::patch('/users/edit/{id}', 'UserController@update')->name('users.update');
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
