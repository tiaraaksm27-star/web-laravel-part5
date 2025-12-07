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
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id_buku');

            $table->unsignedBigInteger('id_kategori_buku');
            $table->string('judul');
            $table->string('pengarang');
            $table->year('tahun_terbit');

            $table->timestamps();

            $table->foreign('id_kategori_buku')
                ->references('id_kategori_buku')
                ->on('kategori_buku')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
