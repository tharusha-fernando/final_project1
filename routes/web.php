<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });
    Route::group(['middleware' => ['auth', 'role:administrator']], function() {
        Route::get('/new_employee', [DashboardController::class,'new_employee']);
        Route::get('/request_fundsA', \App\Http\Livewire\Admin\RequestFunds::class);
        Route::get('/about_us', [DashboardController::class,'about_us']);
        Route::get('/view_funds', [DashboardController::class,'view_funds']);

    });
    Route::group(['middleware' => ['auth', 'role:patient_user']], function() {
        //Route::get('/new_employee', [DashboardController::class,'new_employee']);
        //Route::get('/request_fundsA', \App\Http\Livewire\Admin\RequestFunds::class);
        Route::get('/about_usUs', [DashboardController::class,'about_usUs']);
        //Route::get('/view_funds', [DashboardController::class,'view_funds']);

    });
});
