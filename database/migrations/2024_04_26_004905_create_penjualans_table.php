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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->integer('PenjualanID');
            $table->date('TanggalPenjualan');
            $table->integer('TotalHarga');
            $table->integer('PelangganID');
            $table->timestamps();
            $table->primary('PenjualanID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('penjualans');
    }
};
