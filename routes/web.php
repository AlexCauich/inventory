<?php

use Illuminate\Support\Facades\Route;

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

// Router Auth
Route::get('/login', 'AuthController@getLogin')->name('login');
        // ||Nombre ruta  ||Controlador    ||Accion a realizar
Route::post('/login', 'AuthController@postLogin')->name('login');

Route::get('/register', 'AuthController@getRegister')->name('register');
        // ||Nombre ruta  ||Controlador    ||Accion a realizar
Route::post('/register', 'AuthController@postRegister')->name('register');

Route::get('/logout', 'AuthController@getLogout')->name('logout');
