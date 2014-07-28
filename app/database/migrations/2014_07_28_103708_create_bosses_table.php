<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBossesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bosses', function($table)
		{
		    $table->increments('id');
		    $table->string('name');//姓名
		    // $table->string('boss_id');//身份證字號
		    $table->string('id_num');//身份證字號
		    $table->string('tel', 100);//電話
		    $table->timestamps();//Adds created_at and updated_at columns
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bosses');
	}

}
