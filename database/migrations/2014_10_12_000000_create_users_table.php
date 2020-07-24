<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('users', function (Blueprint $table)
         {
            $table->id();
            $table->string('name',150);
            $table->string('email',100)->unique()->nullable();
            $table->string('mobile',20)->unique();
            $table->string('farmer_id_card',32)->unique()->nullable();
            $table->string('aadhar_card_no',32)->unique();
            $table->string('address',250);
            $table->smallInteger('village_id');
            $table->tinyInteger('role');    //0=>Super Admin 1=>Admin 2=>Soil Testing 3=>Distribution Center 4=>Private Company 5=>Farmer
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
    
}
