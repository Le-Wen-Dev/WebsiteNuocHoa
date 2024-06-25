<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('admin/users',[UserController::class,'users'])->name('admin/users');
Route::get('admin/categories',[ProductController::class,'categories'])->name('admin/categories');
Route::get('admin/products',[ProductController::class,'products'])->name('admin/products');
