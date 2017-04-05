<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gender')->insert(['name' => 'Male', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        DB::table('gender')->insert(['name' => 'Female', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
    }

}

