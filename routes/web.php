<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\SuitController;
use App\Http\Controllers\CoatController;
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

/////Home Routes
Route::get('/',[HomeController::class,'home']);
Route::get('/home',[HomeController::class,'home'])->name('home');

///////Admin Login Routes (Public)
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AdminController::class,'make_login'])->name('admin.make_login');

 ////Protected Admin Routes (Require Authentication)
 Route::group(['middleware' =>'auth'],function(){
    // Admin Dashboard & Core Functions
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard'); 
    Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin/logout');
    Route::post('/admin/global-search',[AdminController::class,'globalSearch'])->name('admin.global-search');
    
    // Protected Resource Routes
    Route::resource('details',App\Http\Controllers\DetailController::class);
    Route::resource('suits',App\Http\Controllers\SuitController::class);
    Route::resource('coats',App\Http\Controllers\CoatController::class);
    Route::resource('pantshirts',App\Http\Controllers\PantShirtController::class);
 });