<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTunjanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunjangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karyawan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('jenis_tunjangan')->nullable();
            $table->integer('biaya_tunjangan')->nullable();
            $table->foreign('id_karyawan')->references('id')->on('karyawan');
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
        Schema::dropIfExists('tunjangan');
    }
}