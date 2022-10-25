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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->integer('no_badge')->unique();
            $table->string('nama_karyawan');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->default('Laki-Laki');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
            $table->string('no_hp')->nullable();
            $table->string('agama');
            $table->string('tahun_masuk');
            $table->enum('status_pernikahan', ['Menikah', 'Belum Menikah'])->default('Belum Menikah');
            $table->enum('jabatan', ['Operator', 'Supervisor','Superintendent','Manager','General Manager','Deputy General Manager'])->default('Operator');
            $table->enum('status_jabatan', ['Tetap','Kontrak'])->default('Tetap');
            $table->string('foto_karyawan')->nullable();
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
        Schema::dropIfExists('karyawan');
    }
};
