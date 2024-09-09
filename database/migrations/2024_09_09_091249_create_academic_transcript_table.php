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
        Schema::create('academic_transcripts', function (Blueprint $table) {
            $table->id();
            $table->string('universitas')->nullable();
            $table->string('nim')->unique()->nullable();
            $table->string('nama')->nullable();
            $table->string('jurusan_studi')->nullable();
            $table->string('jenjang_gelar')->nullable();
            $table->decimal('ipk', 4, 2)->nullable(); // Assuming IPK is a decimal value (e.g., 3.50)
            $table->string('fakultas')->nullable();
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
