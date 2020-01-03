<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('restaurant_id');
            $table->string('weekdays')->nullable();
            $table->string('weekends')->nullable();
            $table->string('holidays')->nullable();
            $table->double('delivery')->nullable();
            $table->enum('reservationsAllowed',['yes','no'])->default('no');
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
        Schema::dropIfExists('preferences');
    }
}
