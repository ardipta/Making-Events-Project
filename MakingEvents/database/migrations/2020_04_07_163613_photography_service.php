<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotographyService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photography_service', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('photographer_id')->nullable();
			$table->string('photographer_name')->nullable();
			$table->string('mobile_no')->nullable();
			$table->string('email')->nullable();
			$table->string('category')->nullable();
			$table->string('price')->nullable();
			$table->string('discount')->nullable();
			$table->string('image')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photography_service');
    }
}
