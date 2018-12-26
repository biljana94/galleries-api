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

//ruta za login
Route::group([
    'namespace' => 'Auth',
    'prefix' => 'auth'
], function() {
    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');
});

// Route::resource('all-galleries');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
