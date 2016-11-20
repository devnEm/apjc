<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('promotions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('year');
          $table->string('director_title');
          $table->string('director_name');
          $table->string('director_firstname');
          $table->string('total_student_effectives');
          $table->string('nb_class');
          $table->integer('school_id')->unsigned();          
          $table->timestamps();
      });

      Schema::table('promotions', function($table) {
       $table->foreign('school_id')->references('id')->on('schools');
   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('promotions');
    }
}
