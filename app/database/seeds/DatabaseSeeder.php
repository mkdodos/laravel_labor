<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CashAppSeeder');
		$this->command->info('Bear app seeds finished.');

	}

}

class CashAppSeeder extends Seeder {
	public function run() {
		DB::table('cashes')->delete();
		Cash::create(array(
			'spend_date' => '2014-05-16',
			'item' => '審查費',
			'note' => '謝瑞宏',
			'amt' => '200'
		));
		Cash::create(array(
			'spend_date' => '2014-05-16',
			'item' => '審查費',
			'note' => '于建中',
			'amt' => '200'
		));

	}
}
