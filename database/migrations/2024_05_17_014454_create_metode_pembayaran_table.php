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

        Schema::create('metode_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rekening')
                ->nullable()
                ->constrained('rekening')
                ->cascadeOnDelete();
            $table->string('nama_metode');
            $table->enum('jenis_metode', ['Tunai', 'Transfer']);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metode_pembayaran');
    }
};
