<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate();

		$types = ["Admin" ,"Customer", "Manager"];

		foreach($types as $rt)
		{
			$nrt = new UserType();
			$nrt->name = $rt;               
			$nrt->save();
		}
    }
}
