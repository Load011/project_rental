<?php

use App\Http\Controllers\Frontend\CarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\DashboardController;

use App\Http\Controllers\MobilController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\TransaksiController;

Route::get('/', function () {
    return view('frontend.dashboard');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/mobil', [MobilController::class, 'index'])->name('mobil.index');
    Route::get('/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
    Route::post('/mobil', [MobilController::class, 'store'])->name('mobil.store');
    Route::get('/mobil/{mobil}', [MobilController::class, 'show'])->name('mobil.show');
    Route::get('/mobil/{mobil}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
    Route::put('/mobil/{mobil}', [MobilController::class, 'update'])->name('mobil.update');
    Route::delete('/mobil/{mobil}', [MobilController::class, 'destroy'])->name('mobil.destroy');

    Route::get('/rental', [SewaController::class, 'index'])->name('sewa.index');
    Route::get('/service/rental', [SewaController::class, 'create'])->name('sewa.create');
    Route::post('/rental', [SewaController::class, 'store'])->name('sewa.store');
    Route::get('/rental/{rental}', [SewaController::class, 'show'])->name('sewa.show');
    Route::get('/rental/{rental}/edit', [SewaController::class, 'edit'])->name('sewa.edit');
    Route::put('/rental/{rental}', [SewaController::class, 'update'])->name('sewa.update');
    Route::delete('/rental/{rental}', [SewaController::class, 'destroy'])->name('sewa.destroy');

    Route::get('/supir', [SupirController::class, 'index'])->name('supir.index');
    Route::get('/supir/create', [SupirController::class, 'create'])->name('supir.create');
    Route::post('/supir', [SupirController::class, 'store'])->name('supir.store');
    Route::get('/supir/{supir}', [SupirController::class, 'show'])->name('supir.show');
    Route::get('/supir/{supir}/edit', [SupirController::class, 'edit'])->name('supir.edit');
    Route::put('/supir/{supir}', [SupirController::class, 'update'])->name('supir.update');
    Route::delete('/supir/{supir}', [SupirController::class, 'destroy'])->name('supir.destroy');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/transaksi/{transaksi}/edit', [SupirController::class, 'edit'])->name('transaksi.edit');
    Route::delete('/transaksi/{transaksi}', [SupirController::class, 'destroy'])->name('transaksi.destroy');




});

    //Route untuk Frontend
    Route::get('/user', [DashboardController::class, 'index'])->name('frontend.dashboard');
    Route::get('/cars', [CarController::class, 'index'])->name('frontend.car');
    Route::get('/car/{id}', [CarController::class, 'show'])->name('car.show');
    Route::get('/service', [ServiceController::class, 'index'])->name('frontend.service');
    Route::get('/service/rental', [ServiceController::class, 'rental'])->name('frontend.rent');

require __DIR__.'/auth.php';
