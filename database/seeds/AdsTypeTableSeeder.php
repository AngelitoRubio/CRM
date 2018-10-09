<?php

use Illuminate\Database\Seeder;

class AdsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	\DB::table('ads_types')->truncate();
    	\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		DB::statement("INSERT INTO ads_types (id, type) VALUES
			(1, 'EVENTS'),
			(2, 'BDAY'),
			(3, 'PRODUCT');");
    }
}
