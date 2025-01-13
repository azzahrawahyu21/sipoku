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
        Schema::create('memo', function (Blueprint $table) {
            $table->integer('id_memo', true);
            $table->string('nm_memo', 70);
            $table->date('tgl_buat');
            $table->date('tgl_disahkan')->nullable();
            $table->string('dokumen', 50);
            $table->binary('lampiran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memo');
    }
};
