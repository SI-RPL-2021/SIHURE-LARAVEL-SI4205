<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->integer('nip')->nullable();
            $table->unsignedBigInteger('id_divisi')->nullable();
            $table->unsignedBigInteger('id_karyawan')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->foreign('id_divisi')->references('id')->on('divisi');
            $table->foreign('id_karyawan')->references('id')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
