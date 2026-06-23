<?php

namespace App\Http\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegoController extends Controller
{
    public function index (){
        return "Lego Products";
    }
    public function show ($type){
        return "Lego Products: $type";
    }
}
