<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BreturnController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JbukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PbookController;
use App\Http\Controllers\RbukuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use App\Models\Breturn;
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

Route::middleware(['auth'])->prefix('perpus')->name('perpus.')->group(function() {
    
    Route::resource('jbukus', JbukuController::class);
    Route::resource('rbukus', RbukuController::class);
    Route::resource('books', BookController::class);
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('staffs', StaffController::class);
    Route::resource('users', UserController::class);
    Route::resource('pinjams', PbookController::class);
    Route::resource('returns', BreturnController::class);
});

Route::group(['prefix'=>'auth','middleware'=>'guest'],function(){
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/do-login',[LoginController::class,'authenticate'])->name('do-login');
    Route::get('/register',[RegisterController::class,'index'])->name('register');
    Route::post('/do-register',[RegisterController::class,'store'])->name('do-register');
});

    Route::post('/logout',[LoginController::class,'logout'])->name('logout');




