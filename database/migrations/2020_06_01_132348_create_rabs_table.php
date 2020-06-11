<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rabs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengguna')->unsigned();
            $table->string('nama_event');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->text('tempat');
            $table->text('deskripsi');
            $table->text('proposal');
            $table->text('lpj')->nullable();
            $table->text('perbaikan')->nullable();
            $table->char('status')->default(0);
            $table->boolean('konfirmasi')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('rabs');
    }
}
