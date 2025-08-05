<?php

use App\Http\Controllers\WaitlistController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [WaitlistController::class, 'index'])->name('home');


Route::post('/join-waitlist', [WaitlistController::class, 'store']);


Route::get('/admin/login', [WaitlistController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [WaitlistController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/logout', [WaitlistController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard', [WaitlistController::class, 'dashboard'])->name('dashboard');