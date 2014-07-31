<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEldersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elders', function($table)
		{
		    $table->increments('id');
		    $table->string('name');//姓名
		    $table->string('id_num');//身份證號碼
		    $table->date('birth');//生日
		    $table->string('address', 255);//居住地址
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
		Schema::drop('elders');
	}

}
