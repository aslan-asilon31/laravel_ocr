<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\Certificate;

class IjasahController extends Controller
{
    public function index(){
        return view('admin.certificate');
    }

    public function scan(Request $request){

        // Ambil file dari request
        $file = $request->file('doc_transkrip_img');
        // Buat nama file baru jika perlu
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Tentukan folder tujuan
        $destinationPath = public_path('scan/certificate');

        // Pindahkan file ke folder public/scan/ktp
        $file->move($destinationPath, $fileName);

        // Path file setelah dipindahkan
        $movedFilePath = $destinationPath . '/' . $fileName;

        // Jika ingin menampilkan gambar yang baru saja diupload
        $fileUrl = asset('scan/certificate/' . $fileName);
        
        $isUrl = $request->input('is_url');

        // Ambil Bearer token dari user yang login
        $accessToken = auth()->user()->access_token;
                
        $flaskPort = env('FLASK_PORT', '5000'); // Mengambil port dari variabel lingkungan, default ke 5000 jika tidak ada
        $flaskUrl = "http://localhost:$flaskPort";

        // Kirim file dan parameter tambahan ke API eksternal
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer  '. $accessToken,
            ])->attach(
                'doc_ktp_img', file_get_contents($movedFilePath), $fileName
            )->timeout(600)->post('$flaskUrl/ocr_api/v2/transkrip', [
                'is_url' => $isUrl,
            ]);

            // Tangkap dan decode JSON dari API eksternal
            $responseJson = $response->json();
            $certificates = $responseJson;

            // Kirim hasil scan dan URL gambar ke view
            $imagePath = asset('scan/certificate/' . $fileName);
            $fileNameImage = $fileName;

            return view('admin.certificate-scan', compact('certificates','fileUrl','fileNameImage'));


        } catch (\Illuminate\Http\Client\RequestException $e) {
            // Tangani exception jika permintaan gagal
            return response()->json(['error' => 'Request failed: ' . $e->getMessage()], 500);
        }

      
    }


}
