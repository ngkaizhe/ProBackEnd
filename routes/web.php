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
// use php artisan route:list to check

Route::get('/', 'PagesController@welcome');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');


// project
Route::resource('projects', 'ProjectsController');

// Equivalent code
//Route::post('/projects', 'ProjectsController@store')->name('projects.store');
//Route::get('/projects', 'ProjectsController@index')->name('projects.index');
//Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
//Route::patch('/projects/{project}', 'ProjectsController@update')->name('projects.update')->where('project', '\d');
//Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show')->where('project', '\d');
//Route::delete('/projects/{project}', 'ProjectsController@destroy')->name('projects.destroy')->where('project', '\d');
//Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit')->where('project', '\d');

//task
Route::patch('/tasks/{task}', 'ProjectTasksController@update')->name('tasks.update');
Route::patch('/projects/{project}/task', 'ProjectTasksController@store')->name('tasks.store');


//post
Route::resource('posts', 'PostsController');
