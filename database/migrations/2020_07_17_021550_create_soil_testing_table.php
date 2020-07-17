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
        Schema::create('soil_testing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');        
            $table->foreignId('soil_test_id')->nullable();
            $table->smallInteger('nitrogen')->nullable();
            $table->smallInteger('phosphorus')->nullable();
            $table->smallInteger('potasium')->nullable();
            $table->smallInteger('rainfall')->nullable();
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
        Schema::dropIfExists('soil_testing');
    }
}
