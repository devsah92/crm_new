<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserauthController extends Controller
{
    //
    public function UserLogin(Request $req)
    {
        $data = $req -> input();
        $req ->session()-> put('user', $data['username']);
        echo session('user');
    }
}
