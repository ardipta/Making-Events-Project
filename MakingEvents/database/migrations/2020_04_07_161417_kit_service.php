<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KitService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kit_service', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('provider_id')->nullable();
			$table->string('provider_name')->nullable();
			$table->string('kit_item')->nullable();
			$table->string('kit_name')->nullable();
			$table->string('price')->nullable();
			$table->string('discount')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kit_service');
    }
}
