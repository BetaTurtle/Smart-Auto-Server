<?php

class CourseTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('courses')->delete();
		Course::create(array(
			'course_no'     => 'BT1010',
			'course_name' => 'Life Science',
		));

		Course::create(array(
			'course_no'     => 'MA1010',
			'course_name' => 'Calculus I',
		));

		Course::create(array(
			'course_no'     => 'ME1100',
			'course_name' => 'Thermodynamics',
		));
	}

}
