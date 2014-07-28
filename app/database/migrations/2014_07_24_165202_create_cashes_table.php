<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cashes', function($table)
		{
		    $table->increments('id');
		    $table->date('spend_date');//支出日期
		    $table->string('item');//項目
		    $table->string('note', 100);//摘要
		    $table->integer('amt');//金額
		    $table->smallInteger('tax');//稅額
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
		Schema::drop('cashes');
	}

}
