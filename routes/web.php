<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\AgentController;
use App\Http\Controllers\HomePropertyController;
use App\Http\Controllers\admin\AmenityController;
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\agents_auth\LoginController;
use App\Http\Controllers\agents_auth\LogoutController;
use App\Http\Controllers\agents_auth\RegisterController;


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
// admin routes
Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('agents', [AgentController::class, 'index'])->name('agents.index');
    Route::delete('agents/{agent}', [AgentController::class, 'destroy'])->name('agents.destroy');
    //bulk delete
    Route::delete('amenities/bulk-delete', [AmenityController::class, 'bulkDelete'])
        ->name('amenities.bulk-delete');
    Route::delete('properties/bulk-delete', [PropertyController::class, 'bulkDelete'])
        ->name('properties.bulk-delete');

    Route::resource('properties', PropertyController::class);
    Route::resource('amenities', AmenityController::class);
});


// Main routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
// Properties
Route::get('properties', [HomePropertyController::class, 'index'])->name('properties.index');
Route::get('propertes/{property}', [HomePropertyController::class, 'show'])->name('properties.show');
// Agents
Route::get('agents', [AgentController::class, 'list'])->name('agents.list');
// Agents auth
Route::get('register', [RegisterController::class, 'RegistrationForm'])
    ->name('registrationForm')->middleware('auth');
Route::post('register', [RegisterController::class, 'register'])
    ->name('register')->middleware('auth');
Route::get('login', [LoginController::class, 'LoginForm'])
    ->name('loginForm');
Route::post('login', [LoginController::class, 'login'])
    ->name('login');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
