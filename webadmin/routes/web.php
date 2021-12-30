<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


use App\Http\Controllers\ManageuserController;
use App\Http\Controllers\leadController;
use App\Http\Controllers\ProjectsController;

use App\Http\Controllers\BooksController;

use App\Http\Controllers\UserauthController;
use App\Http\Controllers\testcontroller;


use App\Http\Controllers\RazorpayPaymentController;
use App\Models\user;
use App\Models\role;

Route::post('/user', [UserauthController::class,'UserLogin']);

//------------ Role Routes start----------------//

//Route::resource('role', RoleController::class);


Route::resource('test', testcontroller::class);

//------------ Role Routes end----------------//

Route::resource('books', BooksController::class);
Route::resource('lead', leadController::class);
Route::resource('Projects', ProjectsController::class);

//------------ User Routes start----------------//--------------------------//

Route::get(
    '/manageusers',
    function () {
        $role = session()->get('role');
        if ($role=='Admin') {
            $data = user::all();
            $dataa = compact('data');
    
            $sdata = role::all();
            $rdata = compact('sdata');
    
            return view('manageuser') -> with($dataa) ->with($rdata);
        } else {
            return redirect('/');
        }
    }
);

Route::get(
    '/signout',
    function () {
        if (session()->has('user')) {
            session()->flush('user');
            session()->pull('role');
        }
        return redirect('/');
    }
);

Route::get('/edituser/{userid}', function ($userid) {
    $data = user::where('userid', $userid)->get();
    $rdata = role::all();

    return view('edituser', ['data'=>$data], ['rdata'=>$rdata]);
});

Route::post('/update/{userid}', [RegisterController::class,'useredit']);
Route::post('/useradd', [RegisterController::class,'useradd']);

//------------ User Routes Ends----------------//------------------------------//



//-------------Register Routes start------------------//
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'userentry']);
//-------------Register Routes end------------------//

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/', [LoginController::class,'index']);






Route::get('/deleteuser/{userid}', [ManageuserController::class,'delete']);
Route::get('payment', [RazorpayPaymentController::class, 'index']);
Route::post('payment', [RazorpayPaymentController::class, 'store']);
