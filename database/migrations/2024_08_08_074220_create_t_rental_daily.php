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
        Schema::create('t_rental_daily', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobil_id');
            $table->unsignedBigInteger('service_id');
            $table->string('nama_penyewa');
            $table->string('no_hp');
            $table->string('alamat_penyewa');
            $table->string('email_penyewa');
            $table->integer('lama_sewa');
            $table->dateTime('penjemputan');
            $table->timestamps();

            $table->foreign('mobil_id')->references('id')->on('m_mobil')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('m_service')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_rental_daily');
    }
};
