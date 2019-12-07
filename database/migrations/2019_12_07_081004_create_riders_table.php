<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phonenumber')->nullable();
            $table->enum('motor',['yes','no'])->nullable();
            $table->enum('student',['yes','no'])->nullable();
            $table->enum('license',['yes','no'])->nullable();
            $table->enum('mobile',['yes','no'])->nullable();
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
        Schema::dropIfExists('riders');
    }
}
