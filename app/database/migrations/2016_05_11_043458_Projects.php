<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function (Blueprint $table) {
				$table->increments('id');
				$table->string('name');
				$table->string('lastname');
				$table->string('mail');
				$table->dateTime('birthdate');
				$table->string('tel');
				$table->string('socialnetwork');
				$table->string('socialid');
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
		Schema::create('projects');
	}

}
