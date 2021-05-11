<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa', function (Blueprint $table) {
            $table->id('nis');
            $table->string('email')->unique();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin')->default("LAKI-LAKI");
            $table->string('agama')->default("");
            $table->string('tempat_lahir')->default("");
            $table->date('tanggal_lahir')->default(Carbon::parse("1990-01-01"));
            $table->double('rata_rata_UN')->default(0.0);
            $table->unsignedBigInteger('gaji_orang_tua_pertahun')->default(0);
            $table->string('asal_sekolah')->default("");
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('data_siswa');
    }
}
