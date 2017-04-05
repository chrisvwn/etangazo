<?php

use Illuminate\Database\Seeder;
use App\Report;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reports = 
        [
        	[
	        	'country_id' => 1, 
				'title' => 'Mutwiri Mbugua missing since Jan 2016',
				'type' => '2',
				'contact_name' => 'Mama Sam, Mrs Judy Mutongoria', 
				'contact_phone' => '078393847',
				'country_area_id' => 23,
				'police_station' => 'Kayole police station',
				'police_ref_number' => 'OB2016/1/1/2',
				'event_date' => '2016-1-1',
				'description' => 'This is the description of the report',
				'user_id' => 1
			]

		];

		foreach ($reports as $report) 
		{
			Report::insert($report);
		}
    }

}

