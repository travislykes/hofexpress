<?php

use Illuminate\Database\Seeder;
use App\DeliveryType;

class DeliveryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate();

		$types = ["To My Location" ,"Pick Up From Store"];

		foreach($types as $rt)
		{
			$nrt = new DeliveryType();
			$nrt->name = $rt;               
			$nrt->save();
		}
    }
}
