<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventLainnyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_lainnyas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengguna')->unsigned();
            $table->integer('id_proker')->unsigned();
            $table->string('tipe');
            $table->text('proposal');
            $table->text('perbaikan')->nullable();
            $table->text('lpj')->nullable();
            $table->enum('acc_bem', [1,2])->nullable();
            $table->enum('acc_bpm', [2,3])->nullable();
            $table->enum('acc_kaprodi',[3,4])->nullable();
            $table->enum('acc_wadir_3', [4,5])->nullable();
            $table->timestamps();

            $table->foreign('id_pengguna')->references('id')->on('penggunas')->onDelete('CASCADE');
            $table->foreign('id_proker')->references('id')->on('prokers')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_lainnyas');
    }
}
