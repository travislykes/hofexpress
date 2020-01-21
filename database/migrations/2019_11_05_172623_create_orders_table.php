<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('user_id');
            $table->uuid('restaurant_id')->nullable();
            $table->uuid('location_id')->nullable();
            $table->uuid('rider_id')->nullable();
            $table->double('subtotal')->nullable()->default(0.00);
            $table->double('delivery_fees')->nullable()->default(0.00);
            $table->double('total')->default(0.00);
            $table->uuid('order_status_id')->nullable();
            $table->uuid('payment_type_id')->nullable();
            // $table->text('order');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
