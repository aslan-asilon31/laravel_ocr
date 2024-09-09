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
        Schema::create('certificate', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nim')->nullable();
            $table->string('nama_universitas')->nullable();
            $table->string('gelar')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('status')->nullable();
            $table->string('ijazah_atau_skl')->nullable();
            $table->string('jabatan_penandatangan')->nullable();
            $table->date('tanggal_tahun_lulus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate');
    }
};
