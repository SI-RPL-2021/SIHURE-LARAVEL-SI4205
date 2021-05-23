<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaLemburTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_lembur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karyawan')->nullable();
            $table->string('jabatan')->nullable();
            $table->integer('biaya_lembur')->nullable();
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
        Schema::dropIfExists('biaya_lembur');
    }
}
