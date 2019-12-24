<?php

use Illuminate\Database\Seeder;
use App\PaymentType;

class PaymentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate();

		$types = ["cash" ,"bank transfer", "loyalty points"];

		foreach($types as $rt)
		{
			$nrt = new PaymentType();
			$nrt->name = $rt;               
			$nrt->save();
		}
    }
}
