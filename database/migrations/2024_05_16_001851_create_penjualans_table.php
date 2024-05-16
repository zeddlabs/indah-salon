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
        Schema::disableForeignKeyConstraints();

        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->constrained('pelanggan');
            $table->foreignId('id_metode_pembayaran')->constrained('metode_pembayaran');
            $table->string('invoice');
            $table->date('tanggal_pesanan');
            $table->decimal('total_biaya', 8, 2);
            $table->enum('status_pesanan', ["Menunggu"]);
            $table->enum('status_pembayaran', ["Belum"]);
            $table->string('bukti_pembayaran');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
