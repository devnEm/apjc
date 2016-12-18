<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('election_id')->unsigned();
            $table->integer('adherent_id')->unsigned();
            $table->boolean('elu')->nullable();
            $table->integer('rang')->nullable();
            $table->timestamps();
        });
        Schema::table('candidats', function($table) {
             $table->foreign('election_id')->references('id')->on('elections');
         });
        Schema::table('candidats', function($table) {
            $table->foreign('adherent_id')->references('id')->on('adherents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidats');
    }
}
