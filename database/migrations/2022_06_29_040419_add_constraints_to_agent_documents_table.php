<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_documents', function (Blueprint $table) {
            //
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_documents', function (Blueprint $table) {
            //
            $table->dropForeign('agent_documents_agent_id_foreign');

        });
    }
};
