<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter',50);
            $table->string('str');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('nomor_telepon',15);
            $table->string('email',50);
            $table->string('jenis_kelamin',9);
            $table->string('spesialisasi',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
