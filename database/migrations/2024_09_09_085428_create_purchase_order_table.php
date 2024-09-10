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
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nama_vendor')->nullable();
            $table->string('no_invoice')->nullable();
            $table->date('tanggal_invoice')->nullable();
            $table->string('periode')->nullable();
            $table->string('no_kontrak')->nullable();
            $table->decimal('dpp', 15, 2)->nullable();
            $table->decimal('tax', 15, 2)->nullable();
            $table->decimal('total', 15, 2)->nullable();
            $table->string('type_tax')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('nama_rek')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('type_transaksi')->nullable();
            $table->string('meterai')->nullable();
            $table->decimal('nilai_meterai', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order');
    }
};
