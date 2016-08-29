<?php
use AppBlog\Entities\Status;
class StatusSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('status')->delete();
		Status::create(array('id'=>1,'description' => 'activo'));
		Status::create(array('id'=>2,'description' => 'inactivo'));
	}

}
