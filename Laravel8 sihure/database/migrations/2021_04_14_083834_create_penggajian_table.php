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
            $table->unsignedBigInteger('id_tunjangan')->nullable();
            $table->unsignedBigInteger('id_konsumsi')->nullable();
            $table->unsignedBigInteger('id_lembur')->nullable();
            $table->unsignedBigInteger('id_users')->nullable();

            $table->integer('gaji_pokok')->nullable();
            $table->integer('jumlah_tanggungan')->nullable();
            $table->integer('biaya_tanggungan')->nullable();
            $table->time('jam_lembur')->nullable();
            $table->integer('biaya_lembur')->nullable();
            $table->string('jenis_konsumsi')->nullable();
            $table->integer('biaya_konsumsi')->nullable();
            $table->string('jenis_tunjangan')->nullable();
            $table->integer('biaya_tunjangan')->nullable();
            $table->integer('jumlah_absen')->nullable();
            $table->integer('biaya_potongan')->nullable();

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
