<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::create([
            'nama_dokter'=>'alisa',
            'str'=>'2220',
            'tanggal_lahir'=>'2006-12-20',
            'alamat'=>'kataparoro',
            'nomor_telepon'=>'081246636488',
            'email'=>'alisanurhalisa1@gmail.com',
            'jenis_kelamin'=>'perempuan',
            'spesialisasi'=>'mata'
        ]);
        Dokter::create([
            'nama_dokter'=>'putri',
            'str'=>'2221',
            'tanggal_lahir'=>'2008-01-26',
            'alamat'=>'karuni',
            'nomor_telepon'=>'082147922824',
            'email'=>'saputringongo@gmail.com',
            'jenis_kelamin'=>'perempuan',
            'spesialisasi'=>'umum'
        ]);
        Dokter::create([
            'nama_dokter'=>'rini',
            'str'=>'2222',
            'tanggal_lahir'=>'2007-05-19',
            'alamat'=>'lararoda',
            'nomor_telepon'=>'081234567890',
            'email'=>'katrinasibusaibo@gmail.com',
            'jenis_kelamin'=>'perempuan',
            'spesialisasi'=>'gigi'
        ]);
    }
}
