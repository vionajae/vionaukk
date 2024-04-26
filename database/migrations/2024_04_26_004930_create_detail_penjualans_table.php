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
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->integer('DetailID');
            $table->integer('PenjualanID');
            $table->integer('ProdukID');
            $table->integer('JumlahProduk');
            $table->integer('Subtotal');
            $table->timestamps();
            $table->primary('DetailID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('detail_penjualans');
    }
};
