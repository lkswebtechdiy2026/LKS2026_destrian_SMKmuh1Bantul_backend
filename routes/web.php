<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use Spatie\Permission\Models\Role;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    // user
    Route::view('applicant.index', 'applicant.index')->name('applicant');
    // analisis
    Route::view('analisis.index', 'analisis.index')->name('analisis');
    // verif
    Route::view('verifikasi.index', 'verifikasi.index')->name('verifikasi');
    // manager
    Route::view('manager.index', 'manager.index')->name('manager');



    Route::post('/applicant', [ApplicantController::class, 'index'])->name('applicant.index');
    Route::view('applicant.', 'applicant.index')->name('applicant');
    Route::get('/applicant/create', [ApplicantController::class, 'create'])->name('applicant.create');
});



require __DIR__ . '/settings.php';
