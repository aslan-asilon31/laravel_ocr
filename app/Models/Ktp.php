<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Ktp extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'ktp';

    protected $fillable = [
        'image',
        'nama',
        'nik',
        'alamat',
        'tanggal_lahir',
        'tempat_lahir',
        'golongan_darah',
        'rt_rw',
        'kecamatan',
        'kelurahan',
        'kabupaten',
        'provinsi',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'kewarganegaraan',
        'berlaku_hingga',
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
