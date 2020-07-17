<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_event')->unsigned();
            $table->integer('id_eventlainnya')->unsigned();
            $table->integer('id_pengguna')->unsigned();
            $table->string('nama_event');
            $table->string('organisasi');
            $table->string('keterangan')->nullable();
            $table->string('revisi');
            $table->date('tanggal_revisi');
            $table->string('ke');
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('id_event')->references('id')->on('events')->onDelete('CASCADE');
            $table->foreign('id_eventlainnya')->references('id')->on('eventlainnyas')->onDelete('CASCADE');
            $table->foreign('id_pengguna')->references('id')->on('penggunas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revisis');
    }
}
