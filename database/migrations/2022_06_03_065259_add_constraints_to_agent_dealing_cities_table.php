<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConstraintsToAgentDealingCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_dealing_cities', function (Blueprint $table) {
            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreignId('agent_id')->references('id')->on('agents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_dealing_cities', function (Blueprint $table) {
            $table->dropforeign('agent_dealing_cities_city_id_foreign');
            $table->dropforeign('agent_dealing_cities_agent_id_foreign');

        });
    }
}
