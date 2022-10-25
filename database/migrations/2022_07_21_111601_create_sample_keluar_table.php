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
        Schema::create('sample_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('kode_sample_keluar')->unique();
            $table->string('expedisi_pengiriman')->nullable();
            $table->date('tanggal_kirim');
            $table->enum('segment',['Domestic','Export'])->default('Domestic');
            $table->enum('jenis_sample',['Complaint','Market'])->default('Complaint');
            $table->string('customer');
            $table->string('product');
            $table->string('lot_number');
            $table->text('deskripsi_sample');
            $table->string('foto_sample_keluar')->nullable();
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
        Schema::dropIfExists('sample_keluar');
    }
};
