<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 10);
            $table->string('title_th', 20);
            $table->string('name_th', 100);
            $table->string('surname_th', 100);
            $table->string('title_en', 20);
            $table->string('name_en', 100);
            $table->string('surname_en', 100);
            $table->string('email', 100)->unique();
            $table->string('tel', 20);
            $table->string('shirt_size', 5);
            $table->string('food_limitation', 100);
            $table->boolean('prep_course');
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
        Schema::drop('participants');
    }
}
