<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\MutualFundController;
use App\Http\Controllers\GenEmpSalaryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // return view('welcome');
});

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::POST('/login',[LoginController::class,'login_action'])->name('loginaction');


Route::name('admin.')->middleware('auth')->group(function() {

    Route::get('/admin', function () {
        return view('admin.index');
   });

    //Route::get('gensalary',GenEmpSalary::class,'gen_form')->name('gen_form');
    Route::resource('insurance',InsuranceController::class);
    Route::resource('MutualFund',MutualFundController::class);
    Route::resource('Employee',EmployeeController::class);
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
    Route::get('gensalary',[GenEmpSalaryController::class,'genform'])->name('genform');
    Route::POST('emp_list',[GenEmpSalaryController::class,'emp_list'])->name('emp_list');
});



