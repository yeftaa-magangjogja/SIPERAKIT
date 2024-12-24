<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table='pasien';
    protected $fillable=[
        'nama_pasien',
        'nik',
        'tanggal_lahir',
        'alamat',
        'nomor_telepon',
        'email',
        'jenis_kelamin',
        'golongan_darah',
        'riwayat_penyakit'

    ];
}
