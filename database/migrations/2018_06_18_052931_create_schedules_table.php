<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professor_id')->unsigned()->nullable();
            $table->integer('curriculum_id')->unsigned();
            $table->string('time');
            $table->string('day');
            $table->timestamps();

            // $table->foreign('curriculum_id')
            //       ->references('id')->on('curricula')
            //       ->onDelete('cascade');

            // $table->foreign('professor_id')
            //       ->references('id')->on('users')
            //       ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
