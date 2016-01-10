<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','page\Awal@index');
Route::post('/','page\Awal@absence');
Route::resource('admin','admin\adminAbsence');
Route::post('/admin','admin\adminAbsence@login');
// Route::get('admin\member\getData','member@getData')
// Route::resource('member','admin\Member');



