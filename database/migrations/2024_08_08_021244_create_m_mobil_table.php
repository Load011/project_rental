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
        Schema::create('m_mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('jenis_mobil');
            $table->string('deskripsi_mobil');
            $table->integer('mileage');
            $table->string('foto_mobil');
            $table->integer('tmp_duduk');
            $table->string('bahan_bakar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_mobil');
    }
};
