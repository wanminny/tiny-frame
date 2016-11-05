<?php

use \NoahBuscher\Macaw\Macaw as Route;

Route::get('/', 'App\Controllers\IndexController@index');
Route::get('/test', 'App\Controllers\IndexController@test');
Route::get('/(:num)', 'App\Controllers\IndexController@demo');

Route::dispatch();


