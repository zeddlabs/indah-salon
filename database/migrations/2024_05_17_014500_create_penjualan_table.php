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
            $table->foreignId('id_produk')->constrained('produk');
            $table->integer('jumlah_produk');
            $table->bigInteger('total_biaya');
            $table->enum('status_pesanan', ["Menunggu Pembayaran", "Diproses", "Dikirim", "Selesai"]);
            $table->enum('status_pembayaran', ["Belum Dibayar", "Sudah Dibayar"]);
            $table->string('bukti_pembayaran')->nullable();
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
