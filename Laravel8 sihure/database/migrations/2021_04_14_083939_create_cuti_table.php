<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_jenis_cuti');

            $table->string('alasan_cuti');
            $table->integer('jatah_cuti');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->date('jumlah_hari');
            $table->integer('total_cuti');

            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_jenis_cuti')->references('id')->on('jenis_cuti');
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
        Schema::dropIfExists('cuti');
    }
}
