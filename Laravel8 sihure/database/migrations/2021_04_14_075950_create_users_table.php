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
            $table->string('divisi')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
            $table->integer('jumlahcuti')->nullable();
            $table->string('foto')->nullable();
            $table->string('status')->nullable();
            $table->integer('nip')->nullable();
            $table->string('alamat')->nullable();
            $table->integer('no_telp')->nullable();
            $table->string('agama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->integer('umur')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->integer('no_hp')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->integer('jumlah_anak')->nullable();
            $table->integer('tahun_masuk')->nullable();
            $table->integer('code')->nullable();


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
