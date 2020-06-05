<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeysToWines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wines', function (Blueprint $table) {
        $table->foreign('variety_id')->references('id')->on('varieties');
        $table->foreign('country_id')->references('id')->on('countries');
        $table->foreign('winery_id')->references('id')->on('wineries');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wines', function (Blueprint $table) {
            $table->dropForeign(['variety_id']);
            $table->dropForeign(['country_id']);
            $table->dropForeign(['winery_id']);
        });
    }
}
