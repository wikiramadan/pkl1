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
        Schema::create('berita2s', function (Blueprint $table) {
            $table->id();
            $table->string('judulberita');
            $table->string('gambar')->default('default.jpg'.'png'.'jpeg');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita2s');
    }
};
