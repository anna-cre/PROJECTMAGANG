<?php

use Illuminate\Support\Facades\Route;

// Controller untuk Halaman Publik
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InovasiController as PublicInovasiController;
use App\Http\Controllers\FaqController as PublicFaqController;
use App\Http\Controllers\LayananController as PublicLayananController;

// Controller untuk Halaman Admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\InovasiController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\ProfilLembagaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- HALAMAN PUBLIK (Untuk Pengunjung) ---
Route::get('/', [HomeController::class, 'index'])->name('landing');

Route::get('/profil-publik', [ProfilLembagaController::class, 'showPublic'])->name('profil.publik');

Route::get('/inovasi', [PublicInovasiController::class, 'index'])->name('inovasi.index');
Route::get('/inovasi/{slug}', [PublicInovasiController::class, 'show'])->name('inovasi.show'); // Contoh route detail inovasi

Route::get('/faq', [PublicFaqController::class, 'index'])->name('faq.index');

Route::get('/layanan', [PublicLayananController::class, 'index'])->name('layanan.index');


// --- HALAMAN ADMIN (Harus Login) ---
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route untuk mengelola profil admin sendiri (bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route untuk mengelola Berita/Post
    Route::resource('posts', PostController::class)->except(['show']);

    // Route untuk mengelola Inovasi
    Route::resource('inovasi', InovasiController::class)->except(['show']);

    // Route untuk mengelola FAQ
    Route::resource('faq', FaqController::class)->except(['show']);

    // Route untuk mengelola Layanan
    Route::resource('layanan', LayananController::class)->except(['show']);

    // Route untuk mengelola Profil Lembaga
    Route::get('profil-lembaga', [ProfilLembagaController::class, 'edit'])->name('profil-lembaga.edit');
    Route::patch('profil-lembaga', [ProfilLembagaController::class, 'update'])->name('profil-lembaga.update');

});


// --- ROUTE OTENTIKASI (Login, Register, dll) ---
require __DIR__.'/auth.php';
