<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasiController;
use App\Http\Controllers\DaguController;

Route::get('/', function() {
    return redirect()->route('dasi.index');
});

Route::get('dasi/', [DasiController::class, 'index'])->name('dasi.index');

Route::get('dasi/create', [DasiController::class, 'create'])->name('dasi.create');

Route::post('dasi/create/submit', [DasiController::class, 'store'])->name('dasi.store');

Route::delete('dasi/{id_pass}', [DasiController::class, 'destroy'])->name('dasi.destroy');

Route::get('dasi/edit/{id_pass}', [DasiController::class, 'edit'])->name('dasi.edit');

Route::get('dasi/info/{id}', [DasiController::class, 'show'])->name('dasi.info');

Route::put('dasi/edit/{id_pass}/submit', [DasiController::class, 'update'])->name('dasi.update');

// ------------------------------------------------------------------------------------------------//

Route::get('dagu/', [DaguController::class, 'index'])->name('dagu.index');

Route::get('dagu/create', [DaguController::class, 'create'])->name('dagu.create');

Route::post('dagu/create/submit', [DaguController::class, 'store'])->name('dagu.store');

Route::get('dagu/edit/{id}', [DaguController::class, 'edit'])->name('dagu.edit');

Route::put('dagu/edit/{id}/submit', [DaguController::class, 'update'])->name('dagu.update');

Route::delete('dagu/{id}', [DaguController::class, 'destroy'])->name('dagu.destroy');