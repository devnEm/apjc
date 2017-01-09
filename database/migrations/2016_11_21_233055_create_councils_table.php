<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouncilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('councils', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('url')->nullable();
            $table->integer('promotion_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('councils', function($table) {
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
        Schema::drop('councils');
    }
}
