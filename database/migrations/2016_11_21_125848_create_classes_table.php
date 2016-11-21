<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('promotion_id')->unsigned();
            $table->string('type');
            $table->string('effectif');
            $table->string('professor_title');
            $table->string('professor_name');
            $table->string('professor_firstname');
            $table->timestamps();
        });

        Schema::table('classes', function($table) {
       $table->foreign('promotion_id')->references('id')->on('promotions');
   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('classes');
    }
}
