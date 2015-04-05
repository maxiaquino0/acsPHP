<?php

use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('socios', function($table){
			$table->create();
			$table->increments('id');
			$table->string('nomApel');
			$table->string('dni');
			$table->string('email');
			$table->string('tel');
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
		Schema::drop('socios');
	}

}