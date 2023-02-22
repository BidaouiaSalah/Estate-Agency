<?php


use App\Http\Middleware\SetLanguage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropertyTypeController;
use App\Http\Controllers\TransactionTypeController;
use App\Http\Controllers\UserController;

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

Route::view('/', 'welcome');


Route::prefix('admin/{locale}')->where(['locale' => '[a-zA-Z]+', 'middleware' => SetLanguage::class])->as('admin.')->group(function () {
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

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

Auth::routes();
