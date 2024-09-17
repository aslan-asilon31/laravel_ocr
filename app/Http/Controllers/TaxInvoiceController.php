<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\TaxPpn;

class TaxInvoiceController extends Controller
{
    public function index(){
        return view('admin.tax-ppn');
        
    }

    
    public function scan(Request $request)
    {
        // Validasi file upload
        $request->validate([
            'doc_fp_img' => 'required|file|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'is_url' => 'required|numeric', // Validasi parameter tambahan
        ]);

        // Ambil file dan parameter tambahan dari request
        $file = $request->file('doc_fp_img');
        $isUrl = $request->input('is_url');

        // Ambil Bearer token dari user yang login
        $accessToken = auth()->user()->access_token;

        // Kirim file dan parameter tambahan ke API eksternal
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer  '. $accessToken,
            ])->attach(
                'doc_fp_img', file_get_contents($file->getRealPath()), $file->getClientOriginalName()
            )->timeout(600) // Set timeout to 60 seconds
            ->post('http://localhost:5000/ocr_api/v1/faktur_pajak', [
                'is_url' => $isUrl,
            ]);

            // Tangkap dan decode JSON dari API eksternal
            $responseJson = $response->json();
            $invoices = $responseJson;

            // Simpan file ke folder public/scan/tax
            $imageName = $file->hashName();
            $file->move(public_path('scan/tax'), $imageName);
            $imageUrl = asset('scan/tax/' . $imageName);


            // Panggil method store dan tangkap responsenya
            return $this->store(new Request($dataToStore), $responseJson['data']);

        } catch (\Illuminate\Http\Client\RequestException $e) {
            // Tangani exception jika permintaan gagal
            return response()->json(['error' => 'Request failed: ' . $e->getMessage()], 500);
        }
    }


    public function store(Request $request, $scanData)
    {

        // Asumsikan $request->tanggal_faktur_pajak adalah '08 Januari 2024'
        $dateString = $request->tanggal_faktur_pajak;

        // Map bulan dalam bahasa Indonesia ke bahasa Inggris
        $bulanMap = [
            'Januari'   => 'January',
            'Februari'  => 'February',
            'Maret'     => 'March',
            'April'     => 'April',
            'Mei'       => 'May',
            'Juni'      => 'June',
            'Juli'      => 'July',
            'Agustus'   => 'August',
            'September' => 'September',
            'Oktober'   => 'October',
            'November'  => 'November',
            'Desember'  => 'December',
        ];

        // Ganti nama bulan dalam bahasa Indonesia dengan bahasa Inggris
        foreach ($bulanMap as $indonesia => $english) {
            if (strpos($dateString, $indonesia) !== false) {
                $dateString = str_replace($indonesia, $english, $dateString);
                break;
            }
        }

        $tanggalFakturPajak = Carbon::parse($dateString)->format('Y-m-d H:i:s');

        // Ubah nilai string menjadi tipe data decimal (float)
        $harga_total = floatval($request->harga_total);
        $diskon = floatval($request->diskon);
        $dpp = floatval($request->dpp);
        $ppn = floatval($request->ppn);
        $ppnbm = floatval($request->ppnbm);
    
        // Simpan data ke database
        $data = TaxPpn::create([
            'image' => $request->image,
            'no_faktur_pajak' => $request->no_faktur_pajak,
            'tanggal_faktur_pajak' => $tanggalFakturPajak,
            'npwp_penjual' => $request->npwp_penjual,
            'nama_penjual' => $request->nama_penjual,
            'alamat_penjual' => $request->alamat_penjual,
            'no_npwp_lawan_transaksi' => $request->no_npwp_lawan_transaksi,
            'alamat_lawan_transaksi' => $request->alamat_lawan_transaksi,
            'harga_total' => $harga_total,
            'diskon' => $diskon,
            'dpp' => $dpp,
            'ppn' => $ppn,
            'ppnbm' => $ppnbm,
            'referensi' => $request->referensi,
        ]);

        // Mendapatkan ID dari data yang baru disimpan
        $lastInsertId = $data->id;

        // Jika data berhasil disimpan, tampilkan view dengan data yang di-scan
        if($data) {

            $taxes = TaxPpn::where('id',$lastInsertId)->first();
            return view('admin.tax_ppn_scan', compact('taxes'));
        } else {
            Alert::warning('Error', 'Failed to scan');
            return redirect()->back();
        }
    }



}
