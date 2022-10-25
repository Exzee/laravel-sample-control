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
        Schema::create('sample_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('kode_sample_masuk')->unique();
            $table->string('nama_pengirim');
            $table->date('tanggal_terima');
            $table->enum('segment',['Domestic','Export'])->default('Domestic');
            $table->enum('jenis_sample',['Complaint','Market'])->default('Complaint');
            $table->string('customer');
            $table->string('product');
            $table->string('lot_number');
            $table->string('problem');
            $table->text('deskripsi_sample')->nullable();;            
            $table->string('foto_sample_masuk')->nullable();
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
        Schema::dropIfExists('sample_masuk');
    }
};
