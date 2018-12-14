<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('creator_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('category_finance_move_id')->unsigned();

            $table->string('attached_document', 200)->nullable();
            $table->decimal('amount',8,2);
            $table->decimal('iva',8,2);
            $table->decimal('total',8,2);

            $table->date('limit_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('creator_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('category_finance_move_id')->references('id')->on('category_finance_moves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
}
