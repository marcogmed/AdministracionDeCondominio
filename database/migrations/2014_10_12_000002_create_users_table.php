<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('division_id')->unsigned();
            $table->integer('condominium_id')->unsigned();

            $table->string('name', 50);
            $table->string ('lastname', 50);
            $table->string('surname', 50);
            $table->string('house_number', 10)->nullable();
            
            $table->tinyinteger('is_owner', False, True)->default(1);
            $table->tinyinteger('is_provider', False, True)->default(0);
            $table->tinyinteger('is_active', False, True)->default(1);

            $table->string('phone_number',15);
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('condominium_id')->references('id')->on('condominiums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
