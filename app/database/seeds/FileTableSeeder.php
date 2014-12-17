<?php

class FileTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('materials')->delete();
		Material::create(array(
			'native_name'     => 'Some paper',
			'given_name' => 'BT101 Life Science',
			'course_id' => '1',
			'unique_name'    => '1010212323',
			'user_id' => '1',
		));
	}

}
