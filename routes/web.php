<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\EstateTypeController;

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

Route::resource('estate/type', EstateTypeController::class);
Route::resource('amenities', AmenityController::class);
Route::resource('estates', EstateController::class);
