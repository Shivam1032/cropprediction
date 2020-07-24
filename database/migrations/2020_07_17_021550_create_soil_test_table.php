<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoilTestingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soil_test', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');        
            $table->foreignId('soil_tester_id')->nullable();
            $table->smallInteger('ph')->nullable();
            $table->smallInteger('nitrogen')->nullable();
            $table->smallInteger('phosphorus')->nullable();
            $table->smallInteger('potasium')->nullable();
            $table->smallInteger('rainfall')->nullable();
            $table->smallInteger('temprature')->nullable();
            $table->string('recommended_crop',50)->nullable();
            $table->string('status',50);
            $table->timestamps();            
            $table->foreign('farmer_id')->references('id')->on('users');
            $table->foreign('soil_test_id')->references('id')->on('users');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soil_test');
    }
}
