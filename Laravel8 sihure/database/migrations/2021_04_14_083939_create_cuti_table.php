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
            $table->unsignedBigInteger('id_users')->nullable();
            $table->unsignedBigInteger('id_jenis_cuti')->nullable();

            $table->string('alasan_cuti')->nullable();
            $table->integer('jatah_cuti')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->date('jumlah_hari')->nullable();
            $table->integer('total_cuti')->nullable();
            $table->integer('status')->nullable();

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
