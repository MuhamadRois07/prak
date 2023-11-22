<?php

use App\Http\Controllers\BungaController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homeuser');
Route::get('/bunga', [BungaController::class, 'index'])->name("bunga");

Route::middleware(['auth'])->group(function () {
    Route::post('/bunga', [BungaController::class, 'store'])->name('bungas.store');
    Route::get('/bunga/create', [BungaController::class, 'create'])->name('bungas.create');
    Route::post('/bunga/{bunga}', [BungaController::class, 'update'])->name('bungas.update');
    Route::delete('/bunga/{bunga}', [BungaController::class, 'destroy'])->name('bungas.destroy');
    Route::get('/bunga/{bunga}/edit', [BungaController::class, 'edit'])->name('bungas.edit');

    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});