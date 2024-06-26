<?php

use App\Http\Controllers\Backend\ApplicationController;
use App\Http\Controllers\Auth\RolesController;
use App\Http\Controllers\Auth\UsersController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserPackageController;
use Illuminate\Support\Facades\Artisan;
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

// Link Storage
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
// Register
Route::get('/create-new-profile', [HomeController::class, 'registerProfile'])->name('registerProfile');
Route::post('/register-profile', [ApplicationController::class, 'store'])->name('register.profile');

// Blogs
Route::get('/blog/marriage-media', [BlogController::class, 'marriageMedia'])->name('blog.marriageMedia');

//Login
Auth::routes();
Route::post('/login', [UsersController::class, 'login'])->name('user.login');

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard Route
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

        // Package Routes
        Route::resource('packages', PackageController::class);

        // Package Routes
        Route::resource('user-package', UserPackageController::class);
    });
});
