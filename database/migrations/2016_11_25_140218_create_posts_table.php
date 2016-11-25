<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('nb_vu');
            $table->integer('user_id')->unsigned();
            $table->boolean('attente');
            $table->boolean('public');
            $table->string('title');
            $table->longText('article');
            $table->timestamps();
        });
        Schema::table('posts', function($table) {
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
        Schema::drop('posts');
    }
}
