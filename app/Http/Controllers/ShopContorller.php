<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopContorller extends Controller
{
    public function index(){
        return view('OnlineShop.home')->with('login', true);
    }
}
