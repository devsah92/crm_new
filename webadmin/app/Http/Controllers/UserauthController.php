<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserauthController extends Controller
{
    //
    public function UserLogin(Request $req)
    {
        $data = $req -> input();
        $req ->session()-> put('user', $data['username']);
        $req ->session()-> put('pass', $data['passwword']);

        $var =  $req->username;

        $use = user::find($var);
        

        

        if ($use != null) {
            $req ->session()-> put('role', $use->role);
            if (($req->passwword) ==($use->password)) {
                if (($use->role)=='Admin') {
                    return redirect('dashboard');
                } elseif (($use->role)=='Channel Partner') {
                    return view('dashboard');
                } elseif (($use->role)=='Project Manager') {
                    return view('dashboard');
                } else {
                    echo "Guest user";
                }


                

                return redirect();
            } else {
                echo "Incorrect Password.";
            }
        } else {
            echo "No such user exists..";
        }
    }
}
