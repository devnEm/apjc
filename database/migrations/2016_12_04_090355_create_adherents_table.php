<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdherentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('name');
            $table->string('first_name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('user_id')->nullable();
            $table->boolean('candidat')->nullable();
            $table->boolean('suppleant')->nullable();
            $table->integer('rang')->nullable();
            $table->boolean('hidden_phone');
            $table->boolean('email_subscription');
            $table->boolean('subscribed');
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
        Schema::drop('adherents');
    }
}
