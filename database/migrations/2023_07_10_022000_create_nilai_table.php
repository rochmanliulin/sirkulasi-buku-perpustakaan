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
        Schema::create('nilai', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->char('th_ajaran');
            $table->integer('semester');
            $table->char('nbi');
            $table->char('kode_mk');
            $table->char('nilai');

            $table->foreign('nbi')->references('nbi')->on('laporan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('kode_mk')->references('kode_mk')->on('mata_kuliah')->onUpdate('cascade')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
