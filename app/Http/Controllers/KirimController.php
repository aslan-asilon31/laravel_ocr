<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KirimController extends Controller
{
    public function index(){
        return view('kirim_form');
    }
    public function proctored_show()
    {
        try {
            // Mengambil data dari API
            $response = Http::get('http://localhost:3000/api/proctoring-get');

            // Memeriksa apakah permintaan berhasil
            if ($response->successful()) {
                $data = $response->json();
                return view('proctored_list', ['data' => $data]);
            } else {
                return view('proctored_list', ['error' => 'Failed to retrieve data from API']);
            }
        } catch (\Exception $e) {
            return view('proctored_list', ['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
}
