<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenagementController;

// Halaman Welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Dashboard dan fitur lainnya (hanya jika user login dan verified)
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Manajemen Tugas
    Route::prefix('menagement')->name('menagement.')->group(function () {
        Route::get('/', [MenagementController::class, 'index'])->name('index');
        Route::get('/tambah', [MenagementController::class, 'create'])->name('create');
        Route::post('/', [MenagementController::class, 'store'])->name('store');
        Route::delete('/{id}', [MenagementController::class, 'destroy'])->name('destroy');

        // Tambah link GitHub/Drive
        Route::get('/{id}/link', [MenagementController::class, 'addLinkForm'])->name('addlink.form');
        Route::post('/{id}/link', [MenagementController::class, 'storeLink'])->name('addlink.store');
    });
});

// Route auth dari Laravel Breeze / Fortify
require __DIR__.'/auth.php';
