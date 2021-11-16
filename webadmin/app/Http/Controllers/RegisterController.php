<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\role;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function userentry(Request $request)
    {
        $request->validate(
            [
            'name'=> 'required',
            'email'=> 'required|email',
            'mobile' => 'required||digits:10'
        ]
        );

        // echo"<pre>";
        // print_r($request->all());

        $user = new user;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->mobile = $request['mobile'];

        $newstring = substr($request['mobile'], -4);
        
        $user->userid = ('esh'.mt_rand(10, 100).$newstring);
        $user->save();
    

        $data = user::all();
        $dataa = compact('data');

        return redirect('/manageusers');

        // return redirect()->action('${App\Http\Controllers\HomeController@index}', ['parameterKey' => 'value']);('manageuser') -> with($dataa);
    }

    public function useredit($userid, Request $request)
    {
        $request->validate(
            [
                'name'=> 'required',
                'email'=> 'required|email',
                'mobile' => 'required|digits:10'
            ]
        );

        $user = user::find($userid);
        $user->name = $request['name'];
        $user->role = $request['role'];
        $user->userid = $request['userid'];
        $user->mobile = $request['mobile'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->status = $request['status'];
        $user->state = $request['state'];
        $user->city = $request['city'];
        $user->save();
        return redirect('/manageusers');
    }

    public function useradd(Request $request)
    {
        $request->validate(
            [
            'name'=> 'required',
            'email'=> 'required|email',
            'mobile' => 'required|digits:10|unique:tbl_users,mobile'
        ]
        );

        

        $user = new user;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->mobile = $request['mobile'];
        $user->password = $request['password'];
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->role = $request['role'];

        if ($request['status'] == null) {
            $newstring = substr($request['mobile'], -4);
            
            $user->userid = ('esh'.mt_rand(10, 100).$newstring);
            $user->save();
        
    
            $data = user::all();
            $dataa = compact('data');
    
            return redirect('/manageusers');
        } else {
            $user->status = $request['status'];
            $newstring = substr($request['mobile'], -4);
            
            $user->userid = ('esh'.mt_rand(10, 100).$newstring);
            $user->save();
        
    
            $data = user::all();
            $dataa = compact('data');
    
            return redirect('/manageusers');
        }
       
        // return redirect()->action('${App\Http\Controllers\HomeController@index}', ['parameterKey' => 'value']);('manageuser') -> with($dataa);
    }
}
