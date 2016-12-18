<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBureauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bureau', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('president');
            $table->boolean('secretaire');
            $table->boolean('comptable');
            $table->boolean('redacteur');
            $table->integer('adherent_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('bureau', function($table) {
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
        Schema::drop('bureau');
    }
}
