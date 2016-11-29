<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elections', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('sieges_totaux');
            $table->integer('sieges_obtenus');
            $table->float('participation');
            $table->integer('nb_votant');
            $table->integer('nb_electeur');
            $table->integer('promotion_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('elections', function($table) {
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
        Schema::drop('elections');
    }
}
