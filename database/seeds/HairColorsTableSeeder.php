<?php

use Illuminate\Database\Seeder;

class HairColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('hair_colors')->insert([ 'name' => 'Brown']);
	    DB::table('hair_colors')->insert([ 'name' => 'Black']);
	    DB::table('hair_colors')->insert([ 'name' => 'White']);
	    DB::table('hair_colors')->insert([ 'name' => 'Sandy']);
	    DB::table('hair_colors')->insert([ 'name' => 'Gray or Partially Gray']);
	    DB::table('hair_colors')->insert([ 'name' => 'Red/Auburn']);
	    DB::table('hair_colors')->insert([ 'name' => 'Blond/Strawberry']);
	    DB::table('hair_colors')->insert([ 'name' => 'Blue']);
	    DB::table('hair_colors')->insert([ 'name' => 'Green']);
	    DB::table('hair_colors')->insert([ 'name' => 'Orange']);
	    DB::table('hair_colors')->insert([ 'name' => 'Pink']);
	    DB::table('hair_colors')->insert([ 'name' => 'Purple']);
	    DB::table('hair_colors')->insert([ 'name' => 'Partly or Completely Bald']);
	    DB::table('hair_colors')->insert([ 'name' => 'Other']);
    }
}
