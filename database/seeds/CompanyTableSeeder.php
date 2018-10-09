<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	\DB::table('companies')->truncate();
    	\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		DB::statement("INSERT INTO companies (id, code, company) VALUES
			(1, '001','OWNDAYS'),
			(2, '002','PANDORA'),
			(3, '003','ANELLO');");
    }
}
