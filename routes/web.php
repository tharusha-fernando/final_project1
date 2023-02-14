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
Route::get('/', [DashboardController::class, 'guest']);
//Route::redirect('/', 'login');
//Route::get('/guest', [DashboardController::class, 'guest']);
Route::get('/about_usgu', [DashboardController::class,'about_usgu']);
Route::get('/donate', [DashboardController::class,'donate']);
Route::get('/donation/{id}', [DashboardController::class,'donation']);
Route::get('/contact_us', [DashboardController::class,'contact_us']);
Route::get('/buyAcofeeusUs', [DashboardController::class,'buyA']);


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::fallback(function() {
        return view('pages/utility/404');
    });
    Route::group(['middleware' => ['auth', 'role:administrator']], function() {
        Route::get('/new_employee', [DashboardController::class,'new_employee']);
        //Route::get('/request_fundsA', \App\Http\Livewire\Admin\RequestFunds::class);
        //Route::get('/about_us', [DashboardController::class,'about_us']);
        //Route::get('/view_funds', [DashboardController::class,'view_funds']);//edit_funds/
        //Route::get('/edit_funds/{id_bu}', \App\Http\Livewire\Admin\EditFunds::class);//edit_funds/
        //Route::get('/contact_usUs', \App\Http\Livewire\Admin\EditContacts::class);

    });
    Route::group(['middleware' => ['auth', 'role:administrator|employee']], function() {
        //Route::get('/new_employee', [DashboardController::class,'new_employee']);
        //Route::get('/request_fundsA', \App\Http\Livewire\Admin\RequestFunds::class);
        Route::get('/about_us', [DashboardController::class,'about_us']);
        Route::get('/view_funds', [DashboardController::class,'view_funds']);//edit_funds/
        Route::get('/edit_funds/{id_bu}', \App\Http\Livewire\Admin\EditFunds::class);//edit_funds/
        Route::get('/contact_usUs', \App\Http\Livewire\Admin\EditContacts::class);

    });
    Route::group(['middleware' => ['auth', 'role:patient_user|administrator|employee']], function() {
        //Route::get('/new_employee', [DashboardController::class,'new_employee']);
        //Route::get('/request_fundsA', \App\Http\Livewire\Admin\RequestFunds::class);
        Route::get('/about_usUs', [DashboardController::class,'about_usUs']);
        Route::get('/request_fundsA', \App\Http\Livewire\Admin\RequestFunds::class);
        //Route::get('/view_funds', [DashboardController::class,'view_funds']);

    });
});
