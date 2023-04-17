<?php

use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Auth\RolesController;
use App\Http\Controllers\Auth\UsersController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/create-new-profile', [HomeController::class, 'registerProfile'])->name('registerProfile');
Route::post('/register-profile', [ApplicationController::class, 'store'])->name('register.profile');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile Routes
    Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
    Route::put('/profile/update/{id}', [UsersController::class, 'updateProfile'])->name('profile.update');

    // ***Admin Routes***
    Route::prefix('admin')->middleware(['role:admin'])->group(function () {
        // Role Management Routes
        Route::resource('roles', RolesController::class, ['name' => 'roles']);
        // User Management Routes
        Route::resource('users', UsersController::class, ['name' => 'users']);

        // Application Routes
        Route::get('applications', [ApplicationController::class, 'index'])->name('applications');
        Route::delete('applications/{id}', [ApplicationController::class, 'destroy'])->name('applications.destroy');
    });
});