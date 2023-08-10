<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MpesaContrller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\ReportController;

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

    // swsaving 
    Route::get('/swsaving',[UserController::class,"swsaving"]);

    // mbr save
    Route::post('/mbrsave', [UserController::class, 'mbrsave'])->name('user.saving');

    // total saving count
    Route::get('/total-saving', [UserController::class, 'totalSavings'])->name('total-savings');

    // delete saving
    Route::get('/deletembrsave/{id}',[UserController::class,"deletembrsave"]);

    // initiate payment
    // Route::get('/payment',[UserController::class,"payment"]);

    
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

    // update view saving
    Route::get('/updatesaving/{id}',[AdminController::class,"updatesaving"]);

    // upd saving
    Route::post('/updsaving/{id}', [AdminController::class,"updsaving"]);

    // save
    Route::post('/save/{id}',[AdminController::class,"save"]);

    // show members
    Route::get('/members',[AdminController::class,"members"]);

     // show members saving
     Route::get('/mbr_saving',[AdminController::class,"mbrsaving"]);

    // add member
    Route::post('/addmembers',[AdminController::class,"addmembers"]);


    // show members data
    Route::get('/members', [AdminController::class, 'showData'])->name('admin.members');

     // delete member
     Route::get('/deletemember/{id}',[AdminController::class,"deletemember"]);

    //  update members saves
    Route::get('/update_mbrsave/{id}',[AdminController::class,"updatembrsave"]);
    

});

// Report controller
// Route::controller(AdminController::class)->group(function (){
    Route::get('/report.member_saving', [ReportController::class,"generateReport"]);

// });


// Route::controller(MpesaContrller::class)->group(function (){
//     Route::get('/mpesa',[MpesaContrller::class,"mpesa"]);

// });

// MPESA ROUTES
// Route::controller(MpesaContrller::class)->group(function (){

// Route::post('/payment', [MpesaContrller::class,"makePayment"]);
// });


// Route::post('/payment', 'MpesaController@initiatePayment')->name('initiate');














Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


