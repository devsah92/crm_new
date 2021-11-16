<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlankController;
use App\Http\Controllers\rolesController;
use App\Http\Controllers\ManageuserController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\FollowupsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserauthController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\TableditController;
use App\Models\user;
use App\Models\role;
  
use App\Http\Controllers\AjaxController;

Route::get('jqtable', [TableditController::class,'index']);

Route::post('tabledit/action', [TableditController::class,'action'])->name('tabledit.action');


Route::post('/user', [UserauthController::class,'UserLogin']);

//------------ Role Routes start----------------//

Route::resource('role', RoleController::class);


Route::resource('test', testcontroller::class);

//------------ Role Routes end----------------//


//------------ User Routes start----------------//--------------------------//

Route::get(
    '/manageusers',
    function () {
        $data = user::all();
        $dataa = compact('data');

        $sdata = role::all();
        $rdata = compact('sdata');

        return view('manageuser') -> with($dataa) ->with($rdata);
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


Route::get('ajaxRequest', [AjaxController::class, 'ajaxRequest']);
Route::post('ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
Route::get('/leads', [LeadsController::class,'leadfunction']);
Route::get('/followups', [FollowupsController::class,'followupsfunction']);
Route::get('/projects', [ProjectsController::class,'projectsfunction']);
Route::get('/projectprogressreport', [ProjectprogressController::class,'projectprogressfunction']);
Route::get('/deleteuser/{userid}', [ManageuserController::class,'delete']);
