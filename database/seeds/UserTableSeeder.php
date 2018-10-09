<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	\DB::table('users')->truncate();
    	\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    	$pass = \Hash::make('password');

    	DB::statement("INSERT INTO users (id, name, role_id, company_code, email, password) VALUES
			(1, 'ADMINISTRATOR', '1', '001','admin@chasetech.com','$pass');");
    }
}
