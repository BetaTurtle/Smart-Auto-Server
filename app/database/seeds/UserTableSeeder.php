<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Junaid Babu',
			'username' => 'jun',
			'email'    => 'me@junaidbabu.in',
			'password' => Hash::make('creative'),
		));
	}

}
