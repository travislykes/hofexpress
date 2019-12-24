<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DeliveryTypeTableSeeder::class);
        $this->call(OrderStatusTableSeeder::class);
        $this->call(PaymentTypeTableSeeder::class);
        $this->call(RestaurantTypeTableSeeder::class);
        $this->call(UserTypeTableSeeder::class);
        
    }
}
