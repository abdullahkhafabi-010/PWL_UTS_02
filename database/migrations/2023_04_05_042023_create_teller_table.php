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
        Schema::create('teller', function (Blueprint $table) {
            $id->integer('id')->primary();
            $no_rekening->integer();
            $nama->string();
            $alamat->string();
            $jenis_tabungan->string();
            $saldo->string();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
