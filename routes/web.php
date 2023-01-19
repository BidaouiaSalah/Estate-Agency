<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EstateTypeController;
use App\Http\Middleware\SetLanguage;

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

Route::view('/', 'welcome');

Route::resource('amenities', AmenityController::class);
Route::resource('estates', EstateController::class);

Route::middleware([SetLanguage::class])->prefix('admin/{locale}')->as('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('estate-types', EstateTypeController::class);
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
