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

Route::get('/artikel/create', 'userController@create'); // menampilkan halaman form
Route::post('/artikel', 'userController@store'); // menyimpan data
Route::get('/artikel', 'userController@index'); // menampilkan semua
Route::get('/artikel/{id}', 'userController@show'); // menampilkan detail item dengan id 
Route::get('/artikel/{id}/edit', 'userController@edit'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'userController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'userController@destroy'); // menghapus data dengan id