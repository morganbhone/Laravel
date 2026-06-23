<?php

use App\Http\Products\LegoController;
use App\Http\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lego', [LegoController::class, 'index']);
Route::get('/lego/{type}', [LegoController::class, 'show']);

Route:: get('/user/{email}/{password}', [UserController::class, 'login']);