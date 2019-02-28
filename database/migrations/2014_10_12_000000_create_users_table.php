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

			Schema::create('users', function (Blueprint $table) {
				$table->increments('id');
				$table->string('name',16);
				$table->string('surname',16);
				$table->string('fathername',16)->nullable();
				$table->string('email')->unique();
				$table->timestamp('email_verified_at')->nullable();
				$table->string('password');
				$table->string('photo')->nullable();
				$table->date('birthday')->nullable();
				$table->string('sex')->nullable();
				$table->string('country')->nullable();
				$table->string('city')->nullable();
				$table->string('description',255)->nullable();
				$table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
