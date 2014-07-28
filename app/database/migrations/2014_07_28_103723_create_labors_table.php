<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaborsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('labors', function($table)
		{
		    $table->increments('id');
		    $table->string('name');//姓名
		    $table->enum('gender', array('男', '女'));//性別
		    $table->string('passport');//謢照號碼
		    $table->string('nation');//國籍
		    $table->date('in_date');//入境日
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
		Schema::drop('labors');
	}

}
