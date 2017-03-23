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
    return view('reg-form');
});

Route::get('/students', 'StudentController@list');

Route::post('/students','StudentController@addStudent');

Route::get('/delete-student/{id}' , 'StudentController@delete');

Route::get('/students/edit/{id}', 'StudentController@editForm');

Route::get('/edited{id}', 'StudentController@editForm');

Route::post('/students/update', 'StudentController@update');