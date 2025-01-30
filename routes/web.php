<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManageController;
use App\Http\Controllers\ForgotPWController;
use Illuminate\Support\Facades\Route;

Route::get('/p', function () {
    return view('welcome');
});


Route::get('/user-manage/edit/{id}', [UserController::class, 'edit'])->name('user-manage.edit');
Route::delete('/user-manage/delete/{id}', [UserController::class, 'destroy'])->name('user-manage.destroy');
Route::put('/user-manage/update/{id}', [UserController::class, 'update'])->name('user-manage/update');
Route::get('/user-manage/paginate', [UserManageController::class, 'paginateUsers'])->name('user-manage.paginate');

Route::get('/role-management', [UserController::class, 'showRole'])->name('user.role');

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/user-manage', [UserManageController::class, 'index'])->name('user.manage');

// Route::get('/user-manage/add', function() {
//     return view('user-manage.add');
// })->name('user-manage/add');

Route::get('/dashboard', function () {
    return view('layouts.app');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

Route::get('/memoSuperadmin', function() {
    return view('superadmin.memo.memo-superadmin');
})->name('memo.superadmin');

Route::get('/add-memoSuperadmin', function() {
    return view('superadmin.memo.add-memo');
})->name('add-memo.superadmin');

Route::get('/edit-memoSuperadmin', function() {
    return view('superadmin.memo.edit-memo');
})->name('edit-memo.superadmin');

Route::get('/kirim-memoSuperadmin', function() {
    return view('superadmin.memo.kirim-memoSuperadmin');
})->name('kirim-memoSuperadmin.superadmin');

Route::get('/dashboard.admin', function () {
    return view('admin.index');
})->name('admin.dashboard');
Route::get('/dashboard.superadmin', function () {
    return view('superadmin.dashboard');
})->name('superadmin.dashboard');
Route::get('/dashboard.manager', function () {
    return view('supervisor.index');
})->name('manager.dashboard');

// routes/web.php
Route::middleware('web')->group(function () {
    Route::get('/forgot-password', [ForgotPwController::class, 'showForgotPasswordForm'])->name('forgot-password');
    Route::post('/forgot-password', [ForgotPwController::class, 'sendVerificationCode'])->name('forgot-password.send');
    
    Route::get('/verify-code', [ForgotPwController::class, 'showVerifyCodeForm'])->name('verify-code');
    Route::post('/verify-code', [ForgotPwController::class, 'verifyCode'])->name('verify-code.check');
    
    
    Route::get('/reset-password', [ForgotPwController::class, 'showResetPasswordForm'])->name('reset-password');
    
    Route::post('/reset-password', [ForgotPwController::class, 'resetPassword'])->name('reset-password.update');
    });

Route::get('/verif-email', function () {
    return view('/components/verif-email');
})->name('verif-email');

Route::get('/undanganSuperadmin', function() {
    return view('superadmin.undangan.undangan');
})->name('undangan.superadmin');

Route::get('/add-undanganSuperadmin', function() {
    return view('superadmin.undangan.add-undangan');
})->name('add-undangan.superadmin');

Route::get('/edit-undanganSuperadmin', function() {
    return view('superadmin.undangan.edit-undangan');
})->name('edit-undangan.superadmin');

Route::get('/risalahSuperadmin', function() {
    return view('superadminSuperadmin.risalah.risalah');
})->name('risalah.superadmin');

Route::get('/add-risalahSuperadmin', function() {
    return view('superadmin.risalah.add-risalah');
})->name('add-risalah.superadmin');

Route::get('/edit-risalahSuperadmin', function() {
    return view('superadmin.risalah.edit-risalah');

})->name('edit-risalah.superadmin');

Route::get('/arsip-risalah', function() {
    return view('superadmin.arsip.arsip-risalah');
})->name('arsip-risalah.superadmin');
Route::get('/arsip-undangan', function() {
    return view('superadmin.arsip.arsip-undangan');
})->name('arsip-undangan.superadmin');
Route::get('/arsip-memo', function() {
    return view('superadmin.arsip.arsip-memo');
})->name('arsip-memo.superadmin');


Route::get('/memo-admin', function() {
    return view('admin.memo.memo-admin');
})->name('admin.memo.memo-admin');

Route::get('/add-memoAdmin', function() {
    return view('admin.memo.add-memo');
})->name('admin.memo.add-memo');

Route::get('/edit-memoAdmin', function() {
    return view('admin.memo.edit-memo');
})->name('admin.memo.edit-memo');

Route::get('/kirim-memoAdmin', function() {
    return view('admin.memo.kirim-memoAdmin');
})->name('kirim-memoAdmin.admin');

Route::get('/after-kirim', function() {
    return view('supervisor.after-kirim-memo');
})->name('after-kirim');

// laporan
Route::get('/laporan-memo', function() {
    return view('superadmin.laporan.laporan-memo');
})->name('laporan-memo.superadmin');
Route::get('/laporan-risalah', function() {
    return view('superadmin.laporan.laporan-risalah');
})->name('laporan-risalah.superadmin');
Route::get('/laporan-undangan', function() {
    return view('superadmin.laporan.laporan-undangan');
})->name('laporan-undangan.superadmin');

// cetak laporan
Route::get('/cetak-laporan-memo', function() {
    return view('superadmin.laporan.cetak-laporan-memo');
})->name('laporan-memo');
Route::get('/cetak-laporan-risalah', function() {
    return view('superadmin.laporan.cetak-laporan-risalah');
})->name('laporan-risalah');
Route::get('/cetak-laporan-undangan', function() {
    return view('superadmin.laporan.cetak-laporan-undangan');
})->name('laporan-undangan');

// Dashboard
Route::get('/dashboard-admin', function() {
    return view('admin.dashboard');
})->name('dashboard-admin');

Route::get('/dashboard-supervisor', function() {
    return view('supervisor.dashboard');
})->name('dashboard-supervisor');