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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('tautan'); // URL atau tautan
            $table->string('judul'); // Judul recruitmen
            $table->text('deskripsi'); // Deskripsi recruitmen
            $table->string('gambar'); // Path atau URL gambar
            $table->date('tgl_publish'); // Tanggal publikasi
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitments');
    }
};
