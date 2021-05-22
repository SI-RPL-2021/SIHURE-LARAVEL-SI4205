<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLemburTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lembur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_biaya_lembur');
            $table->string('tanggal');
            $table->integer('jumlah_jam');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->foreign('id_biaya_lembur')->references('id')->on('biaya_lembur');
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
        Schema::dropIfExists('lembur');
    }
}
