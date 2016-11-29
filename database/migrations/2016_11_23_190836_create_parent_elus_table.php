<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentElusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_elus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('promotion_id')->unsigned();
            $table->string('titre');
            $table->string('name');
            $table->string('first_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->boolean('candidat')->nullable();
            $table->boolean('elu')->nullable();
            $table->boolean('suppleant')->nullable();
            $table->integer('rang')->nullable();
            $table->boolean('hidden_phone');
            $table->boolean('email_subscription');
            $table->timestamps();
        });
        Schema::table('parent_elus', function($table) {
             $table->foreign('promotion_id')->references('id')->on('promotions');
         });
        Schema::table('parent_elus', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parent_elus');
    }
}
