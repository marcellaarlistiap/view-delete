<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{id}', [ProductController::class, 'destroy'])->name('productDelete');
Route::get('/tambah', [ProductController::class, 'create'])->name('tambahProduct');

Route::get('/categori', [CategoriController::class, 'index'])->name('categori');
Route::get('/categori/{id}', [CategoriController::class, 'destroy'])->name('categori.destroy');


Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
