<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Billing\PelangganController;

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
//login
Route::get('/', [DashboardController::class, 'index']);

//user/profile jetsream
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//roles route
Route::group(['middleware' => 'auth', 'middleware' => 'verified'], function() {
    //role billing
    Route::group(['middleware' => 'role:billing', 'prefix' => 'billing', 'as' => 'billing.'], function() {
        Route::resource('dashboard', \App\Http\Controllers\Billing\DashboardController::class);
        Route::resource('pelanggan', \App\Http\Controllers\Billing\PelangganController::class);
        Route::any('getPelanggan', [PelangganController::class, 'getData'])->name('pelanggan.getPelanggan');

    });
    //role marketing
    Route::group(['middleware' => 'role:marketing', 'prefix' => 'marketing', 'as' => 'marketing.'], function() {
        Route::resource('dashboard', \App\Http\Controllers\Marketing\DashboardController::class);
    });
    //role admin
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        //Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
});
