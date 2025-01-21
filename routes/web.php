<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManageController;
use Illuminate\Support\Facades\Route;

Route::get('/p', function () {
    return view('welcome');
});

Route::get('/user-manage/edit/{id}', [UserController::class, 'edit'])->name('user-manage.edit');
// Route untuk menangani update data
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/memo', function() {
    return view('superadmin.memo.memo-superadmin');
})->name('superadmin.memo.memo-superadmin');

Route::get('/add-memo', function() {
    return view('superadmin.memo.add-memo');
})->name('superadmin.memo.add-memo');

Route::get('/edit-memo', function() {
    return view('superadmin.memo.edit-memo');
})->name('superadmin.memo.edit-memo');

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

Route::get('/verif-email', function () {
    return view('/components/verif-email');
})->name('verif-email');

Route::get('/undangan', function() {
    return view('superadmin.undangan.undangan');
})->name('superadmin.undangan.undangan');

Route::get('/add-undangan', function() {
    return view('superadmin.undangan.add-undangan');
})->name('superadmin.undangan.add-undangan');

Route::get('/edit-undangan', function() {
    return view('superadmin.undangan.edit-undangan');
})->name('superadmin.undangan.edit-undangan');

Route::get('/risalah', function() {
    return view('superadmin.risalah.risalah');
})->name('superadmin.risalah.risalah');

Route::get('/add-risalah', function() {
    return view('superadmin.risalah.add-risalah');
})->name('superadmin.risalah.add-risalah');

Route::get('/edit-risalah', function() {
    return view('superadmin.risalah.edit-risalah');
})->name('superadmin.risalah.edit-risalah');

Route::get('/memo-admin', function() {
    return view('admin.memo.memo-admin');
})->name('admin.memo.memo-admin');

Route::get('/add-memo', function() {
    return view('admin.memo.add-memo');
})->name('admin.memo.add-memo');

Route::get('/edit-memo', function() {
    return view('admin.memo.edit-memo');
})->name('admin.memo.edit-memo');

Route::get('/kirim-memo', function() {
    return view('admin.memo.kirim-memo');
})->name('admin.memo.kirim-memo');
