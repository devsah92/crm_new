<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class ManageuserController extends Controller
{
    public function delete($userid)
    {
        $var = user::find($userid);

        if(!is_null($var))
        {
            $var->delete();
        }
       // $var = user::where('userid',$userid)->first();
       // $var->delete();
   // return redirect()->route('dashboard')->with(['message'=> 'Successfully deleted!!']);

        
        return redirect('/manageusers');
    }
    public function edit($userid)
    {

        $var = user::find($userid);
        
        return redirect('/edit');
    }
}
