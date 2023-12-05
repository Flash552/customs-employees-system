<?php

use App\Http\Controllers\CertController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JopTitleController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RankEmpController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StateEmpController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\TypeEmpController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard.dashboard');
//    return view('welcome');
});

Route::get('dashboard', function (){
    return view('dashboard.dashboard');
});
Route::resource("employees",EmployeeController::class);

Route::resource("users",UserController::class);

Route::resource("certs",CertController::class);

Route::resource("settings",SettingsController::class);
Route::resource("type_emp",TypeEmpController::class);
Route::resource("rank_emp",RankEmpController::class);
Route::resource("status_emp",StateEmpController::class);
Route::resource("jop_title",JopTitleController::class);
Route::resource("stations",StationController::class);
Route::resource("cities",CityController::class);
Route::get("profile",ProfileController::class);
Route::resource("login",LogInController::class);

