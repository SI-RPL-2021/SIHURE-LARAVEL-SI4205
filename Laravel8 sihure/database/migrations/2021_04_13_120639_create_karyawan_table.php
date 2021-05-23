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
            $table->unsignedBigInteger('id_divisi')->nullable();
            $table->integer('id_user')->nullable();
            $table->string('nama')->nullable();
            $table->string('agama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->enum('jenis_kelamin',['L','P'])->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('handphone1')->nullable();
            $table->integer('handphone2')->nullable();
            $table->integer('telepon')->nullable();
            $table->string('divisi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('status_kepegawaian')->nullable();
            $table->string('tahun_masuk')->nullable();
            $table->string('gaji_pokok')->nullable();
            $table->string('jumlah_tanggungan')->nullable();
            $table->integer('npwp')->nullable();
            $table->integer('bpjs')->nullable();
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
