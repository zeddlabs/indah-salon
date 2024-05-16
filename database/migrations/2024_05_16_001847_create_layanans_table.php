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

        Schema::create('layanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori_layanan')->constrained('kategori_layanan');
            $table->string('nama_layanan');
            $table->text('deskripsi');
            $table->decimal('harga', 8, 2);
            $table->integer('durasi');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan');
    }
};
