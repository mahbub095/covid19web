<?php

use Illuminate\Support\Facades\Route;



//Route::get('/','getApiCoronaController@index');
Route::get('/','CovidIndexController@index');
Route::get('/world','TableController@worldtable')->name('worldtable');

