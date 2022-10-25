<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_laborat', function (Blueprint $table) {
            $table->id();
            $table->string('kode_form_laborat')->unique();
            $table->foreignId('sample_masuk_id')->constrained('sample_masuk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('karyawan_id')->constrained('karyawan')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_kirim_laborat');
            $table->enum('status_laborat', ['Diproses', 'Selesai', 'Batal'])->default('Diproses');
            $table->string('kode_laporan')->nullable();
            $table->date('tanggal_selesai_laborat')->nullable();
            $table->string('status_sample')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_laborat');
    }
};
