<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->text('title');	
            $table->unsignedBigInteger('variety_id');
            $table->decimal('price');
            $table->unsignedBigInteger('country_id');
            $table->text('province');	
            $table->text('region')->nullable();
            $table->text('region2')->nullable();	
            $table->unsignedBigInteger('winery_id');
            $table->text('designation');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wines');
    }
}
