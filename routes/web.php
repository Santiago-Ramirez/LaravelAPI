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


Auth::routes();

Route::get('/', function () 
{
    return view('index');
});


Route::get('/login2', function () 
{
    return view('auth.login2');
});

Route::get('/inicio', function () 
{
    return view('index');
});


Route::get('/practices', function () 
{
    return view('PracticesComponent');
});


Route::get('/insurances', function () {
    return view('InsurancesComponent');
});

Route::get('/version', function () {
    return view('version');
});

Route::get('/conditions', function () {
    return view('Conditions');
});

Route::get('/practicas', function () {
    return view('practicas');
});

Route::get('/generarToken', function () {
    return view('generateToken');
});


Route::post('generar/{id}','ubaldo@generarToken');

Route::get('/home', 'HomeController@index')->name('home');
