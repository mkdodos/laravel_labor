<?php

class ElderTableSeeder extends Seeder {

 public function run() {


  Eloquent::unguard();

    DB::table('elders')->delete();
    Elder::create(array(
      'birth' => '2014-05-16',
      'name' => '老人一123',
      'address' => '台南市永康'
    ));
    Elder::create(array(
      'birth' => '2014-08-16',
      'name' => '老人二',
      'address' => '台南市永康大小'
    ));

    $this->command->info('Bear app seeds finished.');

  }

}