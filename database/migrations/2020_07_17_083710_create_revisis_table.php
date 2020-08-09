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
            $table->integer('id_event')->unsigned()->nullable();
            // $table->integer('id_eventlain')->unsigned()->nullable();
            $table->integer('id_pengguna')->unsigned();
            $table->text('revisi');
            $table->timestamps();

            $table->foreign('id_event')->references('id')->on('events')->onDelete('CASCADE');
            $table->foreign('id_eventlain')->references('id')->on('event_lainnyas')->onDelete('CASCADE');
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
