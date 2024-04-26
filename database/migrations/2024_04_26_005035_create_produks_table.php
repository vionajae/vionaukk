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
        Schema::create('produks', function (Blueprint $table) {
            $table->integer('ProdukID');
            $table->string('NamaProduk',255);
            $table->integer('Harga');
            $table->integer('Stok');
            $table->timestamps();
            $table->primary('ProdukID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('produks');
    }
};
