<?php

use Illuminate\Database\Seeder;
use App\RestaurantType;

class RestaurantTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
		$types = ["Indian" ,"Italian", "African", "Cafe", "Mexican", "American"];

		foreach($types as $rt)
		{
			$nrt = new RestaurantType();
			$nrt->name = $rt;               
			$nrt->save();
		}
    }
}
