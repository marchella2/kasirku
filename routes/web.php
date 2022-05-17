<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::resource('barang', BarangController::class);
    Route::resource('user', UserController::class);
    Route::resource('transaksi', TransactionController::class);

    Route::get('/print-laporan/{id}', [TransactionController::class, 'print_laporan'])->name('print-laporan');

});

Route::resource('cart-transaksi', CartController::class);
Route::get('/print-struk', [TransactionController::class, 'print_struk'])->name('print-struk');
