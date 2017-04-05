<?php

use Illuminate\Database\Seeder;

class EntityAliasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entity_aliases')->insert(['entity_id' => 1, 'name' => 'AKA Mukobero', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
    }

}

