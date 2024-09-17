<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class LoginController extends Controller
{

    
    public function login(Request $request)
    {
        // Validasi input form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $email = $request->email;
        $password = $request->password;

        try {
            // Kirim request ke API eksternal Flask
            $response = Http::asMultipart()->withHeaders([
                'Accept' => '*/*',
                'Cache-Control' => 'no-cache',
                'User-Agent' => 'PostmanRuntime/7.42.0',
                'Accept-Encoding' => 'gzip, deflate, br',
                'Connection' => 'keep-alive',
            ])->timeout(600)->post('http://localhost:5000/auth/login', [
                'email' => $email,
                'password' => $password,
            ]);

            // Jika request berhasil
            if ($response->successful()) {
                $responseData = $response->json();

                // Cek apakah response memiliki data pengguna
                if (isset($responseData['data'])) {
                    $apiData = $responseData['data'];
                    $accessToken = $apiData['access_token'] ?? null;
                    $refreshToken = $apiData['refresh_token'] ?? null;
                    $userData = $apiData['data'] ?? null;

                    if ($userData) {
                        // Cari user berdasarkan email di database Laravel
                        $user = User::where('email', $userData['email'])->first();

                        if (!$user) {
                            // Buat user baru jika belum ada
                            $user = User::create([
                                'name' => $userData['name'],
                                'email' => $userData['email'],
                                'password' => Hash::make($password), // Simpan password terenkripsi
                                'access_token' => $accessToken,
                                'refresh_token' => $refreshToken,
                            ]);
                        } else {
                            // Jika user sudah ada, update access_token dan refresh_token
                            $user->update([
                                'access_token' => $accessToken,
                                'refresh_token' => $refreshToken,
                            ]);
                        }

                        // Login user ke aplikasi Laravel
                        Auth::login($user);

                        // Redirect ke dashboard
                        return redirect()->intended('/dashboard');
                    } else {
                        return redirect()->back()->withErrors(['error' => 'Data pengguna tidak ditemukan dalam respons API.']);
                    }
                } else {
                    return redirect()->back()->withErrors(['error' => 'Respons API tidak valid.']);
                }
            } else {
                // Jika login API eksternal gagal
                return redirect()->back()->withErrors(['error' => 'Email atau password salah.']);
            }
        } catch (\Exception $e) {
            // Tangani error yang mungkin terjadi selama request ke API eksternal
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menghubungi API eksternal: ' . $e->getMessage()]);
        }
    }



    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan 'auth.login' adalah path ke view login Anda
    }
    // Fungsi logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
