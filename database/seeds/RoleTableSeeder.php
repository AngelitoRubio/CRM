<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	\DB::table('roles')->truncate();
    	\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		DB::statement("INSERT INTO roles (id, role, description) VALUES
			(1, 'ADMINISTRATOR','ADMINISTRATOR'),
			(2, 'BRANCH MANAGER','BRANCH MANAGER');");
    }
}
