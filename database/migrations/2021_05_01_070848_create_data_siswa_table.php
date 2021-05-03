<?php

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
            $table->unsignedBigInteger("id")->primary();
            $table->foreign("id")->references("id")->on("users");
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->unsignedInteger('umur');
            $table->double('rata_rata_UN');
            $table->unsignedBigInteger('gaji_orang_tua_pertahun');
            $table->string('asal_sekolah');
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
