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

        Schema::create('perawatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pelanggan')->constrained('pelanggan')->cascadeOnDelete();
            $table->foreignId('id_layanan')->constrained('layanan')->cascadeOnDelete();
            $table->string('invoice');
            $table->date('tanggal_perawatan');
            $table->time('jam_perawatan');
            $table->text('catatan')->nullable();
            $table->bigInteger('biaya_perawatan');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatan');
    }
};
