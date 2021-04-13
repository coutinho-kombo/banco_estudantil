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

Route::get('/', "HomeController@index")->name('home');

Route::group(['prefix'=>"admin", ], function(){
    
    Route::group(['prefix'=>"estudantes"], function(){
        Route::get('/', "EstudanteController@index");
        Route::get('/create', "EstudanteController@create");
        Route::get('/edit/{id}', "EstudanteController@edit");
        Route::get('/show/{id}', "EstudanteController@show");
        Route::post('/store', "EstudanteController@store");
        Route::put('/update/{id}', "EstudanteController@update");
    });

    
});