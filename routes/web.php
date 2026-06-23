<?php

use App\Http\Products\LegoController;
use App\Http\Users\UserController;
use App\Http\Controllers\ShopContorller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lego', [LegoController::class, 'index']);
Route::get('/lego/{type}', [LegoController::class, 'show']);

Route:: get('/user/{email}/{password}', [UserController::class, 'login']);

Route:: get('/shop', [ShopContorller::class, 'index']);