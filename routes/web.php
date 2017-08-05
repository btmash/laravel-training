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

Route::get('/trainings', 'TrainingController@index')->name('trainings');
Route::get('/training/{id}', 'TrainingController@training')->name('training');

Route::group(['middleware' => 'auth'], function() {
  Route::get('/training/new', 'TrainingController@show_form')->name('create_training_form');
  Route::post('/training/new', 'TrainingController@create')->name('create_training');
});
