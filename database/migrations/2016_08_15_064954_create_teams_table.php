<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('teams', function (Blueprint $table) {
        //     // $table->increments('id');
        //     // $table->string('name', 100)->unique();
        //     // $table->string('institute', 150);
        //     // $table->integer('contestant_1_id')->references('id')->on('participants');
        //     // $table->integer('contestant_2_id')->references('id')->on('participants');
        //     // $table->integer('contestant_3_id')->references('id')->on('participants');
        //     // $table->integer('coach_id')->references('id')->on('participants');
        //     // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::drop('teams');
    }
}
