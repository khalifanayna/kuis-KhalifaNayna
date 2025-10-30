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
        Schema::create('buku', function (Blueprint $table) {
        $table->increments('buku_id');
        $table->string('judul_buku', 255);
        $table->string('penulis', 255);
        $table->string('penerbit', 255);
        $table->string('tahun_terbit')->nullable();
        $table->string('email')->unique();
        $table->string('phone', 20)->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
