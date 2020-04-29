<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('prueba', 'ubaldo@remedial');
Route::get('prueb', 'ubaldo@remedia');
Route::get('prue', 'ubaldo@remedi');
Route::get('pru', 'ubaldo@remed');
Route::get('pr', 'ubaldo@reme');
Route::post('p', 'ubaldo@create');
Route::post('token', 'ubaldo@generateToken');