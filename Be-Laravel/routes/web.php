<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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
////----------------------------------------------------------------Admin------------------------------------------------------------
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('admin/users',[UserController::class,'users'])->name('admin/users');
Route::get('admin/categories',[ProductController::class,'categories'])->name('admin/categories');
Route::get('admin/products',[ProductController::class,'products'])->name('admin/products');
////----------------------------------------------------------------Auth  ------------------------------------------------------------
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register-post', [AuthController::class, 'register_post'])->name('register-post');
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login-post', [AuthController::class, 'login_post'])->name('login-post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

////----------------------------------------------------------------Reset Qua Mail ------------------------------------------------------------
/// -> forgot_password.balde.php và reset_password.blade.php

Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('forgot.password.form');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('forgot.password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

////----------------------------------------------------------------OTP ------------------------------------------------------------

/// -> send_otp_form.balde.php và verifyotp.blade.php
// Route để hiển thị form nhập email để gửi OTP
Route::get('/send-otp', [AuthController::class, 'showSendOtpForm'])->name('send.otp.form');
// Route để xử lý việc gửi email chứa OTP
Route::post('/send-otp', [AuthController::class, 'sendOtp'])->name('send.otp');
// Route để hiển thị form nhập OTP để xác nhận
Route::get('/verify-otp', [AuthController::class, 'showVerifyOtpForm'])->name('verify.otp.form');
// Route để xử lý việc xác nhận OTP
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verify.otp');




