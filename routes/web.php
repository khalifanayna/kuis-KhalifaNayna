<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::resource('buku', BukuController::class);
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');

