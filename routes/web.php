<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ClientController;
use Illuminate\Routing\RouteGroup;
use Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider;

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
    return view('user.index');
});

// -------------------- mainDashboard ----------------------------------
Route::get('/mainDashboard', [AdminController::class, 'mainDashboard']);


// -------------------- Admin Section ----------------------------------
// adminLogin Page
Route::get('/admin', [AdminController::class, 'adminLogin']);
// doAdminLogin
Route::post('/doAdminLogin', [AdminController::class, 'doAdminLogin']);
// admin Dashboard
Route::get('/adminDashboard', [AdminController::class, 'index']);


// -------------------- Staff Section ----------------------------------
// staffLogin Page
Route::get('/staff', [StaffController::class, 'staffLogin']);
//
// doStaffLogin
Route::post('/doStaffLogin', [StaffController::class, 'doStaffLogin']);
// staff Dashboard
Route::get('/staffDashboard', [StaffController::class, 'index']);

// -------------------- User Section -----------------------------------
// userLogin Page
Route::get('/userLogin', [ClientController::class, 'userLogin']);
// doUserLogin
Route::post('/doUserLogin', [ClientController::class, 'doUserLogin']);
// user Dashboard
Route::get('/userDashboard', [ClientController::class, 'index']);
