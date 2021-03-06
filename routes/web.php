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

Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

//Projects 
// Route::get('/projects', 'ProjectController@index');
// Route::post('/projects', 'ProjectController@store');

// Route::get('/projects/create', 'ProjectController@create');


Route::resource('projects', 'ProjectController');

Route::patch('/tasks/{task}', 'ProjectTaskController@update');

Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
