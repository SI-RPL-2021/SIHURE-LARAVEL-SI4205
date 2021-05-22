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
            $table->unsignedBigInteger('tunjangan_id');
            $table->unsignedBigInteger('konsumsi_id');
            $table->unsignedBigInteger('lembur_id');
            $table->unsignedBigInteger('user_id');

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

            $table->foreign('tunjangan_id')->references('id')->on('tunjangan');
            $table->foreign('konsumsi_id')->references('id')->on('konsumsi');
            $table->foreign('lembur_id')->references('id')->on('lembur');
            $table->foreign('user_id')->references('id')->on('user');
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
