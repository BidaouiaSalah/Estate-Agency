<?php

use Illuminate\Support\Facades\App;
use App\Http\Middleware\SetLanguage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyTypeController;
use App\Models\PropertyType;

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


Route::middleware([SetLanguage::class])->prefix('admin/{locale}')->as('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::delete("amenities/bulk-delete", [AmenityController::class, 'bulkDelete'])
        ->name('amenities.bulk-delete');
    Route::delete("property-types/bulk-delete", [PropertyTypeController::class, 'bulkDelete'])
        ->name('property-types.bulk-delete');

    Route::resource('properties', PropertyController::class);
    Route::resource('amenities', AmenityController::class);
    Route::resource('property-types', PropertyTypeController::class);
});

Auth::routes();
