<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('index');
});

// Menampilkan halaman 'index.blade.php' untuk route '/home'
Route::get('/home', function () {
    return view('index');
});

// Menampilkan halaman 'about.blade.php' untuk route '/about'
Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signin', function () {
    return view('modals/login');
});


require __DIR__.'/auth.php';
