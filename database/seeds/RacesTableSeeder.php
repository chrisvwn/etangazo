<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('eye_colors')->insert([ 'name' => 'Asian' ]);
	    DB::table('eye_colors')->insert([ 'name' => 'Black/African American' ]);
	    DB::table('eye_colors')->insert([ 'name' => 'White/Caucasian' ]);
	    DB::table('eye_colors')->insert([ 'name' => 'Other' ]);
    }
}