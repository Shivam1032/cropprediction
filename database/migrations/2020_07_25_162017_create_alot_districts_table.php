<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlotDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alot_districts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('officer_id');
            $table->foreignId('district_id');
            $table->foreign('officer_id')->references('id')->on('users');
            $table->foreign('district_id')->references('id')->on('district');
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
        Schema::dropIfExists('alot_districts');
    }
}
