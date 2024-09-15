<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TaxPpn extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'tax_ppn';

    protected $fillable = [
        'image',
        'no_faktur_pajak',
        'tanggal_faktur_pajak',
        'npwp_penjual',
        'nama_penjual',
        'alamat_penjual',
        'no_npwp_lawan_transaksi',
        'alamat_lawan_transaksi',
        'harga_total',
        'diskon',
        'dpp',
        'ppn',
        'ppnbm',
        'referensi',
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
