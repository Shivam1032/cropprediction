<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id');
            $table->foreignId('product_id');
            $table->integer('avail_qty');
            $table->string('product_uom');
            $table->boolean('visible');
            $table->timestamps();

           
            $table->foreign('seller_id')->references('id')->on('users');
          //  $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell');
    }

}
