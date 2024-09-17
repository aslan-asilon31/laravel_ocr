<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Ktp;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class KtpController extends Controller
{
    public function index(){
        return view('admin.ktp');
    }

    public function scan(Request $request){

        // Ambil file dari request
        $file = $request->file('doc_ktp_img');
        // Buat nama file baru jika perlu
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Tentukan folder tujuan
        $destinationPath = public_path('scan/ktp');

        // Pindahkan file ke folder public/scan/ktp
        $file->move($destinationPath, $fileName);

        // Path file setelah dipindahkan
        $movedFilePath = $destinationPath . '/' . $fileName;

        // Jika ingin menampilkan gambar yang baru saja diupload
        $fileUrl = asset('scan/ktp/' . $fileName);
        
        $isUrl = $request->input('is_url');
        $isCompare = $request->input('is_compare');
        $docKtpUrl = $request->input('doc_ktp_url');
        $tenantId = $request->input('tenant_id');
        $method = $request->input('method');

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
            )->timeout(600)->post('$flaskUrl/ocr_api/v2/ktp', [
                'is_url' => $isUrl,
                'is_compare' => $isCompare,
                'doc_ktp_url' => $docKtpUrl,
                'tenant_id' => $tenantId,
                'method' => $method,
            ]);

            // Tangkap dan decode JSON dari API eksternal
            $responseJson = $response->json();
            $ktps = $responseJson;

            // Kirim hasil scan dan URL gambar ke view
            $imagePath = asset('scan/ktp/' . $fileName);
            $fileNameImage = $fileName;

            return view('admin.ktp_scan', compact('ktps','fileUrl','fileNameImage'));


        } catch (\Illuminate\Http\Client\RequestException $e) {
            // Tangani exception jika permintaan gagal
            return response()->json(['error' => 'Request failed: ' . $e->getMessage()], 500);
        }

      
    }

    public function store(Request $request)
    {
        // Konversi tanggal lahir
        $tanggalLahir = Carbon::createFromFormat('d-m-Y', $request->KTP_TGL_LAHIR)->format('Y-m-d');


        $data = Ktp::create([
            'image' => $request->image_ktp,
            'nama' => $request->KTP_NAMA,
            'nik' => $request->KTP_NIK,
            'alamat' => $request->KTP_ALAMAT,
            'tanggal_lahir' => $tanggalLahir,
            'tempat_lahir' => $request->KTP_TEMPAT_LAHIR,
            'golongan_darah' => $request->KTP_GOL_DARAH,
            'rt_rw' => $request->KTP_RT_RW,
            'kecamatan' => $request->KTP_KECAMATAN,
            'kelurahan' => $request->KTP_KELURAHAN,
            'kabupaten' => $request->KTP_KABUPATEN_MADYA,
            'provinsi' => $request->KTP_PROVINSI,
            'agama' => $request->KTP_AGAMA,
            'status_perkawinan' => $request->KTP_STATUS_PERKAWINAN,
            'pekerjaan' => $request->KTP_PEKERJAAN,
            'kewarganegaraan' => $request->KTP_KEWARGANEGARAAN,
            'berlaku_hingga' => $request->KTP_BERLAKU_HINGGA,
        ]);

        if($data){
            //redirect dengan pesan sukses
            Alert::success('Sukses', 'Data Berhasil Disimpan!');
            return redirect()->route('ktp.index');
        }else{
            //redirect dengan pesan error
            Alert::warning('Error', 'Data Gagal Disimpan!');
            return redirect()->route('ktp.index');
        }

    }


    

}
