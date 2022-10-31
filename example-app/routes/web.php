<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\dashboardcontroller;
use App\Http\Controllers\authController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\Admin\TamuController;

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

Route::get('/', [authController::class,'loginUI']);
Route::post('/login', [authController::class,'loginPost']);

Route::get('/register', [registerController::class,'index']);
Route::post('/register', [registerController::class,'registerPost']);


Route::get('/dashboard',[dashboardcontroller::class,'index']);

Route::get('Admin/tamu',[TamuController::class, 'index'])-> name('Admin-tamu');
