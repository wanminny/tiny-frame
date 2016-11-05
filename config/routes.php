<?php

use \NoahBuscher\Macaw\Macaw as Route;

Route::get('/', 'App\Controllers\IndexController@index');
Route::get('/test', 'App\Controllers\IndexController@test');

//http://localhost:8000/index.php/test

//http://localhost:8000/index.php/1
Route::get('/(:num)', 'App\Controllers\IndexController@demo');

Route::dispatch();


