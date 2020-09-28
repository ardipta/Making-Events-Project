<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StageService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_service', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('provider_id')->nullable();
			$table->string('provider_name')->nullable();
			$table->string('stage_type')->nullable();
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
        Schema::dropIfExists('stage_service');
    }
}
