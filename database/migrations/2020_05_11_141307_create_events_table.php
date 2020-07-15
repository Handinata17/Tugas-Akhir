<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengguna')->unsigned();
            $table->integer('id_proker')->unsigned();
            // $table->string('nama_event');
            // $table->date('tanggal_mulai');
            // $table->date('tanggal_selesai');
            // $table->text('tempat');
            // $table->text('alokasi_dana');
            $table->text('tipe');
            $table->text('proposal');
            $table->text('lpj')->nullable();
            $table->text('perbaikan')->nullable();
            $table->enum('acc', ['0', '1', '2'])->default('1');
            $table->enum('acc_wadir_3', ['0', '1', '2'])->default('1');
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
        Schema::dropIfExists('events');
    }
}
