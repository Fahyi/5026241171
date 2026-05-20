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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id(); // Ini akan membuat kolom 'id' otomatis (Primary Key)
            $table->string('nama'); // Kolom untuk nama pegawai
            $table->string('jabatan'); // Kolom untuk jabatan
            $table->text('alamat'); // Kolom untuk alamat
            $table->timestamps(); // Kolom created_at dan updated_at bawaan Laravel
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
