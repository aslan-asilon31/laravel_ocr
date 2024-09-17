<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IjasahController;
use App\Http\Controllers\KtpController;
use App\Http\Controllers\LembarPoController;
use App\Http\Controllers\TaxInvoiceController;
use App\Http\Controllers\TranskripNilaiController;
use App\Http\Controllers\ExamProctoringController;
use App\Http\Controllers\KirimController;

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
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::middleware('auth')->group(function () {

        Route::get('kirim-json', [KirimController::class,'index'])->name('kirim.json');
        Route::get('proctored-show', [KirimController::class,'proctored_show'])->name('proctored_show');
        Route::resource('dashboard', DashboardController::class);
        Route::resource('ktp', KtpController::class);
        Route::post('ktp-scan', [KtpController::class,'scan'])->name('ktp.scan');
        Route::post('purchase-order-scan', [LembarPoController::class,'scan'])->name('purchase-order.scan');
        Route::resource('purchase-order', LembarPoController::class);
        Route::post('tax-invoice-scan', [TaxInvoiceController::class,'scan'])->name('tax-invoice.scan');
        Route::resource('tax-invoice', TaxInvoiceController::class);
        Route::post('ijasah-scan', [IjasahController::class,'scan'])->name('ijasah.scan');
        Route::resource('ijasah', IjasahController::class);
        Route::post('transkrip-nilai-scan', [TranskripNilaiController::class,'scan'])->name('transkrip-nilai.scan');
        Route::resource('transkrip-nilai', TranskripNilaiController::class);
        Route::resource('exam-proctoring', ExamProctoringController::class);

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        Route::post('/send-proctoring-data', function () {
            try {
                // Mendapatkan semua data yang dikirim dari form
                $data = request()->all();


                // Mengirim data ke API Express.js
                $response = Http::post('http://localhost:3000/api/proctoring-post', $data);

                if ($response->successful()) {
                    // Mengarahkan kembali ke halaman sebelumnya dengan pesan sukses
                    return redirect()->back()->with('status', 'Data has been saved successfully!');
                } else {
                    // Mengarahkan kembali dengan pesan error
                    return redirect()->back()->withErrors('Failed to save data. Please try again.');
                }
            } catch (\Exception $e) {
                // Mengarahkan kembali dengan pesan error
                return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
            }
        });

});