<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		//delete users table records
         DB::table('users')->delete();
         //insert some dummy records
         DB::table('users')->insert(array(
             array('name'=>'test','email'=>'test@test.com','password'=>Hash::make('password'))            

          ));

          $this->command->info('User table seeded!');



		//delete users table records
         DB::table('oauth_clients')->delete();
         //insert some dummy records
         DB::table('oauth_clients')->insert(array(
             array('id'=>'GXvOWazQ3lA6YSaFji','secret'=>'GXvOWazQ3lA.6/YSaFji','name'=>'client 1')            

          ));
  		$this->command->info('oauth_clients seeded!');


		// $this->call('UserTableSeeder');
	}

}
