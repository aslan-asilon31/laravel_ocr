<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IjasahController;
use App\Http\Controllers\KtpController;
use App\Http\Controllers\LembarPoController;
use App\Http\Controllers\TaxInvoiceController;
use App\Http\Controllers\TranskripNilaiController;
use App\Http\Controllers\ExamProctoringController;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::resource('dashboard', DashboardController::class);
Route::resource('ktp', KtpController::class);
Route::get('ktp-scan', [KtpController::class,'scan'])->name('ktp.scan');
Route::resource('purchase-order', LembarPoController::class);
Route::resource('tax-invoice', TaxInvoiceController::class);
Route::get('tax-invoice-scan', [TaxInvoiceController::class,'scan'])->name('tax-invoice.scan');
Route::resource('ijasah', IjasahController::class);
Route::resource('transkrip-nilai', TranskripNilaiController::class);
Route::resource('exam-proctoring', ExamProctoringController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
