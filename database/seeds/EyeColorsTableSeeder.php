<?php

use Illuminate\Database\Seeder;

class EyeColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eye_colors')->insert([ 'Black' ]);
	    DB::table('eye_colors')->insert([ 'Blue' ]);
	    DB::table('eye_colors')->insert([ 'Brown' ]);
	    DB::table('eye_colors')->insert([ 'Gray' ]);
	    DB::table('eye_colors')->insert([ 'Green' ]);
	    DB::table('eye_colors')->insert([ 'Hazel' ]);
	    DB::table('eye_colors')->insert([ 'Maroon' ]);
	    DB::table('eye_colors')->insert([ 'Pink' ] );
	    DB::table('eye_colors')->insert([ 'Multicolored' ]);
	    DB::table('eye_colors')->insert([ 'Other' ]);
    }
}