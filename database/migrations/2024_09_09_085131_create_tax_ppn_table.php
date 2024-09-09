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
        Schema::create('tax_ppn', function (Blueprint $table) {
            $table->id();
            $table->string('no_faktur_pajak')->nullable();
            $table->date('tanggal_faktur_pajak')->nullable();
            $table->string('npwp_penjual')->nullable();
            $table->string('nama_penjual')->nullable();
            $table->text('alamat_penjual')->nullable();
            $table->string('no_npwp_lawan_transaksi')->nullable();
            $table->text('alamat_lawan_transaksi')->nullable();
            $table->decimal('harga_total', 15, 2)->nullable();
            $table->decimal('diskon', 15, 2)->nullable();
            $table->decimal('dpp', 15, 2)->nullable();
            $table->decimal('ppn', 15, 2)->nullable();
            $table->decimal('ppnbm', 15, 2)->nullable();
            $table->text('referensi')->nullable();
            $table->string('url')->nullable();
            $table->text('deskripsi_item')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_ppn');
    }
};
