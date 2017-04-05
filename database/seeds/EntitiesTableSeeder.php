<?php

use Illuminate\Database\Seeder;
use App\Entity;

class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	//insert into persons values(0,'078233746',date('1977-06-19'),1,1,'14642363',1,now(),now());
		$entities = 
		[
			[
				'user_id' => 0,
				'name' => 'Mutwiri Mbugua', 
				'phone' => '0789374665',
				'dateofbirth' => '1984-4-19',
				'nationality' => 1,
				'idtype' => 1,
				'idnumber' => '1477738',
				'gender_id' => 1,
				'birth_place' => 'Nairobi, Kenya',
				'languages_spoken' => 'English, Kiswahili',
				'color_hair' => 'black',
				'color_eyes' => 'brown',
				'height_meters' => '1.6',
				'weight_kgs' => '80',
				'distinguish_mark' => 'Scar on the left side of the face',
				'race' => 'african',
				'age' => 10
			],

			[
				'user_id' => 0,
				'name' => 'Dlamini Nkhomozele', 
				'phone' => '07833878881',
				'dateofbirth' => '1956-2-24',
				'nationality' => 54,
				'idtype' => 2,
				'idnumber' => 'A3333338',
				'gender_id' => 2,
				'birth_place' => 'Johannesburg, South Africa',
				'languages_spoken' => 'English, Kiswahili',
				'color_hair' => 'black',
				'color_eyes' => 'brown',
				'height_meters' => '1.3',
				'weight_kgs' => '90',
				'distinguish_mark' => 'None',
				'race' => 'african',
				'age' => 0
			],
		];

		foreach ($entities as $entity) {
			Entity::insert($entity);
		}
	}
}

