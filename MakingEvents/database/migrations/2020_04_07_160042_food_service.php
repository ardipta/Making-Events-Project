<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FoodService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_service', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('Provider ID')->nullable();
			$table->string('Provider Name')->nullable();
			$table->string('Item Name')->nullable();
			$table->string('Price')->nullable();
			$table->string('Discount')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_service');
    }
}
