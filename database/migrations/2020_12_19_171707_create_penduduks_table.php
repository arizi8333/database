<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('keluarga_id')->references('id')->on('kartukeluargas')->onUpdate('cascade')->onDelete('cascade');
            $table->String('nama');
            $table->String('nik');
            $table->String('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->String('agama');
            $table->String('jenis_kelamin');
            $table->foreignId('level_pendidikan_id')->references('id')->on('levelpendidikans')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('pekerjaan_id')->references('id')->on('pekerjaans')->onUpdate('cascade')->onDelete('cascade');
            $table->String('status_pernikahan');
            $table->String('status_keluarga');
            $table->foreignId('kewarganegaraan_id')->references('id')->on('kewarganegaraans')->onUpdate('cascade')->onDelete('cascade');
            $table->String('ayah');
            $table->String('ibu');
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
        Schema::dropIfExists('penduduks');
    }
}
