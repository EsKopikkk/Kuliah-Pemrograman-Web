<?php

use App\Http\Controllers\MimiController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', [MimiController::class, 'index'])->name('mimi.index');

// About
Route::get('/aboutme', [MimiController::class, 'about'])->name('mimi.about');

// Kue
Route::get('/kueBolu', [MimiController::class, 'kueBolu'])->name('kue.bolu');
Route::get('/bolu1', [MimiController::class, 'bolu1'])->name('kue.bolu');
Route::get('/bolu2', [MimiController::class, 'bolu2'])->name('kue.bolu');
Route::get('/bolu3', [MimiController::class, 'bolu3'])->name('kue.bolu');
Route::get('/kueKering', [MimiController::class, 'kueKering'])->name('kue.kering');

// Lauk & roti
Route::get('/lauk', [MimiController::class, 'lauk'])->name('lauk');
Route::get('/roti', [MimiController::class, 'roti'])->name('roti');
Route::get('/roti1', [MimiController::class, 'roti1'])->name('roti1');
Route::get('/r1', [MimiController::class, 'r1'])->name('r1');
Route::get('/r2', [MimiController::class, 'r2'])->name('r2');
Route::get('/r3', [MimiController::class, 'r3'])->name('r3');

// Produk Ayam
Route::get('/ayamBakar', [MimiController::class, 'ayamBakar'])->name('ayam.bakar');
Route::get('/ayamChick', [MimiController::class, 'ayamChick'])->name('ayam.chick');
Route::get('/ayamKari', [MimiController::class, 'ayamKari'])->name('ayam.kari');
Route::get('/ayamKuning', [MimiController::class, 'ayamKuning'])->name('ayam.kuning');

// Kue kering detail
Route::get('/kering1', [MimiController::class, 'kering1'])->name('kering.1');
Route::get('/kering2', [MimiController::class, 'kering2'])->name('kering.2');
Route::get('/kering3', [MimiController::class, 'kering3'])->name('kering.3');
Route::get('/kering4', [MimiController::class, 'kering4'])->name('kering.4');

// Pudding
Route::get('/Pudding1', [MimiController::class, 'Pudding1'])->name('pudding.1');
Route::get('/Pudding2', [MimiController::class, 'Pudding2'])->name('pudding.2');

