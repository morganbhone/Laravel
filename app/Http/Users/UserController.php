<?php

namespace App\Http\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login($email, $password){
        $arr = ["email" => $email, "password" => $password];
        return view("user.user")->with("data", $arr);
    }
}
