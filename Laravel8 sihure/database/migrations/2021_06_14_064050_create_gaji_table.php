<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_user')->nullable();
            $table->integer('gaji_pokok')->nullable();
            $table->integer('biaya_transportasi')->nullable();
            $table->integer('tunjangan_anak')->nullable();
            $table->integer('tunjangan_kesehatan')->nullable();
            $table->integer('pajak_pendapatan')->nullable();
            $table->integer('lembur')->nullable();
            $table->integer('tugas_keluar')->nullable();
            $table->integer('performa_kerja')->nullable();
            $table->integer('ketidak_hadiran')->nullable();

            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('gaji');
    }
}
