<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('restaurant_id');
            $table->uuid('menu_id');
            $table->string('name');
            $table->string('image')->nullable()->default('food.jpg');
            $table->double('price')->default(0.00);
            $table->text('description')->nullable();
            $table->text('tags')->nullable();
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
        Schema::dropIfExists('foods');
    }
}
