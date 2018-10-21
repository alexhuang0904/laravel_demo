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


Route::get('/users', function () {
    return view('userfortest01');
});

Route::get('users3', function()
{
    return 'Users3!';
});


Route::get('/users2', 'UsersController@userfortest02');
Route::get('/photo', 'photoController@photo');

