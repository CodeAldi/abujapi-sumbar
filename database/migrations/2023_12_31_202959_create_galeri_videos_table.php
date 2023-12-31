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
        Schema::create('galeri_video', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_galeri_id')->constrained('kategori_galeri')->onUpdate('cascade')->onDelete('cascade');
            $table->string('judul_galeri_video')->unique();
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_videos');
    }
};
