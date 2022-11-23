<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make')->nullable();
            $table->string('body')->nullable();
            $table->string('reg_number')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('country_of_manu')->nullable();
            $table->string('country_code')->nullable();
            $table->string('y_o_m')->nullable();
            $table->double('value')->nullable();
            $table->string('currency')->nullable();
            $table->string('insurance')->nullable();
            $table->unsignedBigInteger('permit_id')->nullable();
            $table->unsignedBigInteger('owner_id')->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}
