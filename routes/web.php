<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return "test";
});

Route::resource('users', TestController::class);

Route::get('testing', function () {
    return "testing";
});

Route::get('test1', function () {
    return "is done test";
});
