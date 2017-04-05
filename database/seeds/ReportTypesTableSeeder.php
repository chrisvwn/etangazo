<?php

use Illuminate\Database\Seeder;

class ReportTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('report_types')->insert(['name' => 'missing', 'display_name' => 'Missing Persons', 'description' => 'Missing persons']);
        DB::table('report_types')->insert(['name' => 'wanted', 'display_name' => 'Wanted', 'description' => 'Wanted']);
        DB::table('report_types')->insert(['name' => 'lostfound', 'display_name' => 'Lost and Found', 'description' => 'Lost and Found']);
    }
}
