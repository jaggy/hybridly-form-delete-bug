<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return hybridly('welcome');
});

Route::post('/endpoint', function () {
    dd('post');
});

Route::put('/endpoint', function () {
    dd('put');
});

Route::delete('/endpoint', function () {
    dd('delete');
});
