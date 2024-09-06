<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'index'] )->name('blog');

Route::get('blog/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'adminMiddleware'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('post', PostController::class);
});

require __DIR__ . '/auth.php';

// Route::middleware('guest')->group(function () {
//     Route::get('register', [RegisterController::class, 'create'])
//     ->name('register');

// Route::post('register', [RegisterController::class, 'store']);

// Route::get('login', [LoginController::class, 'create'])
//     ->name('auth.login');

// Route::post('auth.login', [LoginController::class, 'store']);
// });
