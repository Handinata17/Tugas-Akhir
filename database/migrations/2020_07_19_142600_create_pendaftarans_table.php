<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_recruitment')->unsigned();
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->string('email');
            $table->text('file');
            $table->timestamp('verifikasi_email')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();

            $table->foreign('id_recruitment')->references('id')->on('recruitments')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
