<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(GenderTableSeeder::class);
         $this->call('CountriesSeeder');
         $this->call(IdTypeTableSeeder::class);
         $this->call(EntitiesTableSeeder::class);
         $this->call(EntityAliasesTableSeeder::class);
         $this->call(ReportTypesTableSeeder::class);
         $this->call(ReportsTableSeeder::class);
         $this->call(ReportEntitiesTableSeeder::class);
    }
}
