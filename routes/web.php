<?php

use App\Http\Controllers\Frontend\CarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\DashboardController;

use App\Http\Controllers\MobilController;
use App\Http\Controllers\MobilServiceController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\ServiceRentalController;
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

    Route::get('/admin/mobil', [MobilController::class, 'index'])->name('mobil.index');
    Route::get('/admin/mobil/create', [MobilController::class, 'create'])->name('mobil.create');
    Route::post('/admin/mobil', [MobilController::class, 'store'])->name('mobil.store');
    Route::get('/admin/mobil/{mobil}', [MobilController::class, 'show'])->name('mobil.show');
    Route::get('/admin/mobil/{mobil}/edit', [MobilController::class, 'edit'])->name('mobil.edit');
    Route::put('/admin/mobil/{mobil}', [MobilController::class, 'update'])->name('mobil.update');
    Route::delete('/admin/mobil/{mobil}', [MobilController::class, 'destroy'])->name('mobil.destroy');

    Route::get('/admin/rental', [SewaController::class, 'index'])->name('sewa.index');
    Route::get('/admin/rental/{rental}', [SewaController::class, 'show'])->name('sewa.show');
    Route::get('/admin/rental/{rental}/edit', [SewaController::class, 'edit'])->name('sewa.edit');
    Route::put('/admin/rental/{rental}', [SewaController::class, 'update'])->name('sewa.update');
    Route::delete('/admin/rental/{rental}', [SewaController::class, 'destroy'])->name('sewa.destroy');

    Route::get('/admin/supir', [SupirController::class, 'index'])->name('supir.index');
    Route::get('/admin/supir/create', [SupirController::class, 'create'])->name('supir.create');
    Route::post('/admin/supir', [SupirController::class, 'store'])->name('supir.store');
    Route::get('/admin/supir/{supir}', [SupirController::class, 'show'])->name('supir.show');
    Route::get('/admin/supir/{supir}/edit', [SupirController::class, 'edit'])->name('supir.edit');
    Route::put('/admin/supir/{supir}', [SupirController::class, 'update'])->name('supir.update');
    Route::delete('/admin/supir/{supir}', [SupirController::class, 'destroy'])->name('supir.destroy');

    Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/admin/transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/admin/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/admin/transaksi/{transaksi}/edit', [SupirController::class, 'edit'])->name('transaksi.edit');
    Route::delete('/admin/transaksi/{transaksi}', [SupirController::class, 'destroy'])->name('transaksi.destroy');

    Route::get('/admin/service', [ServiceRentalController::class, 'index'])->name('service.index');
    Route::get('/admin/service/create', [ServiceRentalController::class, 'create'])->name('service.create');
    Route::post('/admin/service', [ServiceRentalController::class, 'store'])->name('service.store');
    Route::get('/admin/service/{service}/edit', [ServiceRentalController::class, 'edit'])->name('service.edit');
    Route::delete('/admin/service/{service}', [ServiceRentalController::class, 'destroy'])->name('service.destroy');

    Route::get('/admin/mo_srv', [MobilServiceController::class, 'index'])->name('mo_srv.index');
    Route::get('/admin/mo_srv/create', [MobilServiceController::class, 'create'])->name('mo_srv.create');
    Route::post('/admin/mo_srv', [MobilServiceController::class, 'store'])->name('mo_srv.store');
    Route::get('/admin/mo_srv/{mo_srv}', [MobilServiceController::class, 'show'])->name('mo_srv.show');
    Route::get('/admin/mo_srv/{mo_srv}/edit', [MobilServiceController::class, 'edit'])->name('mo_srv.edit');
    Route::put('/admin/mo_srv/{mo_srv}', [MobilServiceController::class, 'update'])->name('mo_srv.update');
    Route::delete('/admin/mo_srv/{mo_srv}', [MobilServiceController::class, 'destroy'])->name('mo_srv.destroy');

});

    //Route untuk Frontend
    Route::get('/user', [DashboardController::class, 'index'])->name('frontend.dashboard');
    Route::get('/cars', [CarController::class, 'index'])->name('frontend.car');
    Route::get('/car/{id}', [CarController::class, 'show'])->name('car.show');

    //service
    Route::get('/service', [ServiceController::class, 'index'])->name('frontend.service');
    Route::get('/service/rental', [ServiceController::class, 'rental'])->name('frontend.rent');
    Route::get('/service/wedding', [ServiceController::class, 'showWedding'])->name('frontend.wedding');


    Route::get('/service/create', [SewaController::class, 'create'])->name('sewa.create');
    Route::post('/rental', [SewaController::class, 'store'])->name('sewa.store');



require __DIR__.'/auth.php';
