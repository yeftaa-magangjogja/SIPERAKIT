<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama_pasien' => 'alisa',
            'nik' => '0987654321234567',
            'tanggal_lahir' => '2006-12-20',
            'alamat' => 'kataparoro',
            'nomor_telepon' => '081246636488',
            'email' => 'alisanurhalisa1@gmail.com',
            'jenis_kelamin' => 'perempuan',
            'golongan_darah' => 'B',
            'riwayat_penyakit' => 'amnesia'
        ]);
        Pasien::create([
            'nama_pasien' => 'putri',
            'nik' => '1425678394769035',
            'tanggal_lahir' => '2008-01-26',
            'alamat' => 'karuni',
            'nomor_telepon' => '082147922824',
            'email' => 'saputringongo@gmail.com',
            'jenis_kelamin' => 'perempuan',
            'golongan_darah' => 'B',
            'riwayat_penyakit' => 'sakit hati'
        ]);
        Pasien::create([
            'nama_pasien' => 'awan',
            'nik' => '1234567890987654',
            'tanggal_lahir' => '2007-05-15',
            'alamat' => 'beypoyo',
            'nomor_telepon' => '082247607355',
            'email' => 'ezraawann@gmail.com',
            'jenis_kelamin' => 'laki-laki',
            'golongan_darah' => 'O',
            'riwayat_penyakit' => 'paru-paru basah'
        ]);
    }
}
