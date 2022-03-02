<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JbukuController;
use App\Http\Controllers\PbookController;
use App\Http\Controllers\RbukuController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Models\Pbook;
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

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::resource('staffs', StaffController::class);
Route::resource('users', UserController::class);
Route::resource('jbukus', JbukuController::class);
Route::resource('rbukus', RbukuController::class);
Route::resource('books', BookController::class);
Route::resource('pinjams', PbookController::class);

