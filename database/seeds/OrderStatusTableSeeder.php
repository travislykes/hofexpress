<?php

use Illuminate\Database\Seeder;
use App\OrderStatus;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate();

		$types = ["new" ,"preparing", "on-the-way", "delivered", "cancelled"];

		foreach($types as $rt)
		{
			$nrt = new OrderStatus();
			$nrt->name = $rt;               
			$nrt->save();
		}
    }
}
