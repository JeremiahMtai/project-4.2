<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(HomeController::class)->group(function (){
    Route::get('/redirect',[HomeController::class,"Redirect"]);

});

Route::controller(UserController::class)->group(function (){
    Route::get('/saving',[UserController::class,"saving"]);

    Route::get('/loan',[UserController::class,"user_loan"]);

    Route::get('/profile',[UserController::class,"profile"]);

    // send sms
    Route::get('/sendsms',[UserController::class,"sendsms"]);

    
});

// SMS Controller
// Route::controller(SmsController::class)->group(function (){
//     Route::get('/sendsms',[UserController::class,"sendsms"]);
    
// });

Route::controller(AdminController::class)->group(function (){

    Route::get('/index',[AdminController::class,"index"]);

    Route::get('/m_saving',[AdminController::class,"member_saving"]);

    Route::get('/m_loan',[AdminController::class,"member_loan"]);

    // uploadsavingmod
    Route::post('/uploadsavingmod',[AdminController::class,"uploadsavingmod"]);

    // show savings
    Route::get('/show_savings',[AdminController::class,"show_savings"]);

    // delete saving
    Route::get('/deletesaving/{id}',[AdminController::class,"deletesaving"]);




    // show members
    Route::get('/members',[AdminController::class,"members"]);

    // add member
    Route::post('/addmembers',[AdminController::class,"addmembers"]);

});












Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
