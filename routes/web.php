<?php

use App\Http\Controllers\CafeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
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

Route::get('/service/{id}', [SiteController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/cafes', [CafeController::class, 'index'])->name('cafes.index');
Route::get('/cafes/{id}', [CafeController::class, 'show'])->name('cafes.show');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
