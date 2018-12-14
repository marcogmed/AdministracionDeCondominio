<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('division_id')->unsigned();
            $table->integer('condominium_id')->unsigned();
            $table->integer('category_event_id')->unsigned();
            $table->integer('status_id')->unsigned();

            $table->string('description', 250);
            $table->date('event_date');
            $table->time('event_time');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('condominium_id')->references('id')->on('condominiums');
            $table->foreign('category_event_id')->references('id')->on('categories_events');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
