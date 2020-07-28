<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiddingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidding', function (Blueprint $table) {
            $table->id();
            $table->foreignId('SellId');
            $table->foreignId('BuyerId');
            $table->integer('Bidqty');
            $table->string('uom',10);
            $table->float('bid_price',10,2);
            // $table->int('requiredqty');
            $table->timestamps();

            $table->foreign('SellId')->references('id')->on('sell');
            $table->foreign('BuyerId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bidding');
    }
}
