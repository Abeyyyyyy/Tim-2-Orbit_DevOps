<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('LandingPage');
});

// Auth routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginPage'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::get('/profile', [App\Http\Controllers\AuthController::class, 'showProfile'])->middleware('auth')->name('profile');
Route::post('/profile/update', [App\Http\Controllers\AuthController::class, 'updateProfile'])->middleware('auth');

// Route umum - bisa diakses semua user (guest)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route khusus admin (prefix /admin)
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/users', function () {
        return 'Admin - Manage Users';
    })->name('admin.users');
    
    Route::get('/settings', function () {
        return 'Admin - Settings';
    })->name('admin.settings');
});

// Route khusus user (prefix /user)
Route::prefix('user')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
    
    Route::get('/profile', function () {
        return 'User - Profile';
    })->name('user.profile');
    
    Route::get('/settings', function () {
        return 'User - Settings';
    })->name('user.settings');

});

// Resource Students (dilindungi auth, tidak tergantung role tertentu)
Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
    Route::get('/students/simple', [StudentController::class, 'indexSimple'])->name('students.simple');
});
