<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\TanamanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/admin', [AdminController::class, 'index'])->name('home');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('admin/addTanaman', [TanamanController::class, 'viewAddTanaman'])->name('addTanaman');
Route::post('admin/prosesAddTanaman', [TanamanController::class, 'prosesAddTanaman'])->name('prosesAddTanaman');
Route::get('admin/deleteTanaman/{id}', [TanamanController::class, 'deleteTanaman'])->name('deleteTanaman');

Route::get('/tanaman/{slug}', [TanamanController::class, 'viewTanaman'])->name('tanaman');
