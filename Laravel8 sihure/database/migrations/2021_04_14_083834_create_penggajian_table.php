<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggajianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggajian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tunjangan');
            $table->unsignedBigInteger('id_konsumsi');
            $table->unsignedBigInteger('id_lembur');
            $table->unsignedBigInteger('id_users');

            $table->integer('gaji_pokok');
            $table->integer('jumlah_tanggungan');
            $table->integer('biaya_tanggungan');
            $table->time('jam_lembur');
            $table->integer('biaya_lembur');
            $table->string('jenis_konsumsi');
            $table->integer('biaya_konsumsi');
            $table->string('jenis_tunjangan');
            $table->integer('biaya_tunjangan');
            $table->integer('jumlah_absen');
            $table->integer('biaya_potongan');

            $table->foreign('id_tunjangan')->references('id')->on('tunjangan');
            $table->foreign('id_konsumsi')->references('id')->on('konsumsi');
            $table->foreign('id_lembur')->references('id')->on('lembur');
            $table->foreign('id_users')->references('id')->on('users');
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
        Schema::dropIfExists('penggajian');
    }
}
