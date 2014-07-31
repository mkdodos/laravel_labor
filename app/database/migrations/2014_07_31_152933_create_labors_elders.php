<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaborsElders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labors_elders', function(Blueprint $table)
		{

			$table->increments('id');
			$table->integer('labor_id');
			$table->integer('elder_id');
			$table->date('start_date');
			$table->date('end_date');
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
		Schema::drop('labors_elders');
	}

}
