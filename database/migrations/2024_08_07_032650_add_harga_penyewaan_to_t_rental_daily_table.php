<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('t_rental_daily', function (Blueprint $table) {
            $table->integer('harga_penyewaan')->after('lama_sewa');
        });
    }

    public function down()
    {
        Schema::table('t_rental_daily', function (Blueprint $table) {
            $table->dropColumn('harga_penyewaan');
        });
    }

};
