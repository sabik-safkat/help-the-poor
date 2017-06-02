<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->integer('user_id')->unsigned()->index();
            $table->string('event_name')->nullable();
            $table->foreign('event_name')->references('name')->on('programs');
            $table->string('description');
            $table->string('collection_date');
            $table->integer('contact');
            $table->string('location');
            $table->string('category');
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
        Schema::drop('donations');
    }
}
