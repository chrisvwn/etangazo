<?php

use Illuminate\Database\Seeder;

class ReportEntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('report_entities')->insert(['report_id' => 1, 'entity_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
    }

}

