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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::get('/users/mostrar/{id}','DocumentosController@show');

Route::get('/users','DocumentosController@index');

Route::post('/users/create','DocumentosController@store');

Route::delete('/users/{id}/delete','DocumentosController@destroy');

Route::put('/users/{id}/update','DocumentosController@update');





/*
Route::apiResource('/users','DocumentosController');


Route::resource('/users','DocumentosController',['only'=>['index','store','show','update','destroy']]);
*/
/*
Route::group(['middleware' => 'cors'],function(){
Route::post('/users','DocumentosController@index');
});
*/


