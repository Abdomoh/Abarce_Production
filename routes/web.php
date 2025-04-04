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
    $num1=5;
    $num2=8;
    $sum=$num1+$num2;
    return "the result".$sum;
});

Route::get('test1', function () {
    return "is done test";
});
