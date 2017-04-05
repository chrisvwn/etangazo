<?php

use Illuminate\Database\Seeder;

class CountryAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_areas')->insert(['report_country_id' => 1, 'name' => 'Nairobi','created_at' => new DateTime, 'updated_at' => new DateTime]);
    }

}

