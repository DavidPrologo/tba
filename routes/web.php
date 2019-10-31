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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Boards route
Route::get('/boards','BoardController@index');
Route::post('/boards','BoardController@store');
Route::get('/boards/{boards}','BoardController@show');
Route::put('/boards/{boards}','BoardController@update');
Route::delete('/boards/{boards}','BoardController@destroy');
//List
Route::get('/boards/{boards}/list','ListController@index');
Route::post('/boards/{boards}/list','ListController@store');
Route::get('/boards/{boards}/list/{list}','ListController@show');
Route::put('/boards/{boards}/list/{list}','ListController@update');
Route::delete('/boards/{boards}/list/{list}','ListController@destroy');
//card
Route::get('/boards/{boards}/list/{list}/card','CardController@index');
Route::post('/boards/{boards}/list/{list}/card','CardController@store');
Route::get('card/{card}','CardController@show');
Route::put('card/{card}','CardController@update');
Route::delete('card/{card}','CardController@destroy');
//get token
Route::get("/users/{token}", function($token){
    $user = User::where('api_token', $token)->first();
    return response(['user' => $user]);
});