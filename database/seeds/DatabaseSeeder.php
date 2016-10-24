<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Bican\Roles\Models\Role;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		 $this->call('RoleTableSeeder');

		// $this->call('UserTableSeeder');
	}

}
class RoleTableSeeder extends Seeder {

    public function run()
    {
       

		$supervisorRole = Role::create([
		    'name' => 'Supervisor',
		    'slug' => 'supervisor',
		    'description' => '', // optional
		    'level' => 1, // optional, set to 1 by default
		]);


		$adminRole = Role::create([
		    'name' => 'Admin',
		    'slug' => 'admin',
		    'description' => '', // optional
		    'level' => 2, // optional, set to 1 by default
		]);

    }

}