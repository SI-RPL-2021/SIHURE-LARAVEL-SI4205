<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
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
            $table->unsignedBigInteger('id_divisi');
            $table->integer('id_user');
            $table->string('nama');
            $table->string('agama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->integer('umur');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('status_pernikahan');
            $table->string('alamat');
            $table->integer('handphone1');
            $table->integer('handphone2');
            $table->integer('telepon');
            $table->string('divisi');
            $table->string('jabatan');
            $table->string('status_kepegawaian');
            $table->string('tahun_masuk');
            $table->string('gaji_pokok');
            $table->string('jumlah_tanggungan');
            $table->integer('npwp');
            $table->integer('bpjs');
            $table->timestamps();
            $table->foreign('id_divisi')->references('id')->on('divisi');
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
}
