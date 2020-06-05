<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWineReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wine_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wine_id');
            $table->unsignedBigInteger('taster_id');
            $table->longText('description');
            $table->tinyInteger('points');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wine_reviews');
    }
}
