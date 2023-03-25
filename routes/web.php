<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomePropertyController;
use App\Http\Controllers\Admin\AmenityController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\PropertyTypeController;
use App\Http\Controllers\Admin\TransactionTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/
// addmin routes
Route::middleware('set_language', 'auth')->prefix('admin/{locale}')->as('admin.')->group(function () {
    Route::resource('properties', PropertyController::class);
    Route::resource('amenities', AmenityController::class);
    Route::resource('property-types', PropertyTypeController::class);

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('transaction-types', [TransactionTypeController::class, 'index'])->name('transaction-types.index');
    Route::post('transaction-types', [TransactionTypeController::class, 'store'])->name('transaction-types.store');
    Route::delete('transaction-types/{transaction_type}', [TransactionTypeController::class, 'destroy'])->name('transaction-types.destroy');

    Route::delete('amenities/bulk-delete', [AmenityController::class, 'bulkDelete'])
        ->name('amenities.bulk-delete');
    Route::delete('property-types/bulk-delete', [PropertyTypeController::class, 'bulkDelete'])
        ->name('property-types.bulk-delete');
    Route::delete('properties/bulk-delete', [PropertyController::class, 'bulkDelete'])
        ->name('properties.bulk-delete');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [UserController::class, 'profile'])->name('user.profile');
});

// home page routes
Route::middleware('set_language')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('about', [HomeController::class, 'about'])->name('about');

    Route::get('properties', [HomePropertyController::class, 'index'])->name('properties.index');
    Route::get('propertes/{property}', [HomePropertyController::class, 'show'])->name('properties.show');
});

Auth::routes();
