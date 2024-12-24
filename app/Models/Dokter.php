<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table='dokter';
    protected $fillable=[
        'nama_dokter',
        'str',
        'tanggal_lahir',
        'alamat',
        'nomor_telepon',
        'email',
        'jenis_kelamin',
        'spesialisasi'
    ];
}
