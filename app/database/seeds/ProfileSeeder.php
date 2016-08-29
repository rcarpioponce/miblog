<?php
use AppBlog\Entities\Profile;
class ProfileSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('profiles')->delete();
		Profile::create(array('id'=>1,'description' => 'administrador'));
		Profile::create(array('id'=>2,'description' => 'usuario'));
	}

}
