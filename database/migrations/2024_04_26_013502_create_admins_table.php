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
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('AdminID');
            $table->string('NamaLengkap',50);
            $table->string('Alamat',255);
            $table->string('Telepon',15);
            $table->string('Username',10);
            $table->string('Password',10);
            $table->enum('Akses',['Admin','Petugas']);
            $table->timestamps();
            $table->primary('AdminID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('admins');
    }
};
