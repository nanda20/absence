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
Route::resource('adminAbsence','admin\adminAbsence');
Route::resource('adminPetugas','admin\adminPetugas');
Route::get('/adminAbsence','admin\adminAbsence@index');
Route::post('/adminAbsence','admin\adminAbsence@login');
Route::get('/absence','admin\adminAbsence@tampil');
Route::post('/absence','admin\adminAbsence@filter');



