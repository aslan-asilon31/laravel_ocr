<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Models\AcademicTranscript;

class TranskripNilaiController extends Controller
{
    public function index(){
        return view('admin.academic-transcript');
    }

    
    public function scan(Request $request){

        // Ambil file dari request
        $file = $request->file('doc_transkrip_img');
        // Buat nama file baru jika perlu
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Tentukan folder tujuan
        $destinationPath = public_path('scan/transcript');

        // Pindahkan file ke folder public/scan/ktp
        $file->move($destinationPath, $fileName);

        // Path file setelah dipindahkan
        $movedFilePath = $destinationPath . '/' . $fileName;

        // Jika ingin menampilkan gambar yang baru saja diupload
        $fileUrl = asset('scan/transcript/' . $fileName);
        
        $isUrl = $request->input('is_url');

        // Ambil Bearer token dari user yang login
        $accessToken = auth()->user()->access_token;

        // Kirim file dan parameter tambahan ke API eksternal
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer  '. $accessToken,
            ])->attach(
                'doc_transkrip_img', file_get_contents($movedFilePath), $fileName
            )->timeout(600)->post('http://localhost:5000/ocr_api/v2/transkrip', [
                'is_url' => $isUrl,
            ]);

            // Tangkap dan decode JSON dari API eksternal
            $responseJson = $response->json();
            $transcripts = $responseJson;

            // Kirim hasil scan dan URL gambar ke view
            $imagePath = asset('scan/transcript/' . $fileName);
            $fileNameImage = $fileName;

            return view('admin.academic-transcript-scan', compact('transcripts','fileUrl','fileNameImage'));

        } catch (\Illuminate\Http\Client\RequestException $e) {
            // Tangani exception jika permintaan gagal
            return response()->json(['error' => 'Request failed: ' . $e->getMessage()], 500);
        }

      
    }


}
