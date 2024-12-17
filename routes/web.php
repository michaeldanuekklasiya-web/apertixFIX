<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // Ambil semua data foto dari database
    $photos = App\Models\Photo::all(); // Mengambil semua foto dari database

    // Kirim data foto ke view 'dashboard'
    return view('dashboard', compact('photos')); // Menyertakan data $photos ke view dashboard
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/datafoto', function () {
    return view('foto');
})->middleware(['auth', 'verified'])->name('datafoto');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk 'photos' yang hanya bisa diakses oleh user yang sudah login dan terverifikasi
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('photos', PhotoController::class); // Route resource sudah mencakup semua operasi CRUD termasuk 'store'
    Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');  // Menampilkan daftar foto
    Route::post('/datafoto', [PhotoController::class, 'store'])->name('datafoto');
    Route::get('/photos/{id}/edit', [PhotoController::class, 'edit'])->name('photos.edit');
Route::put('/photos/{id}', [PhotoController::class, 'update'])->name('photos.update');
Route::delete('/photos/{id}', [PhotoController::class, 'destroy'])->name('photos.destroy');
    Route::get('/datafoto', function () {
        return view('foto');
    })->name('datafoto');
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
