<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->string('name',150);
            $table->string('address',252);
            $table->string('email',150);
            $table->string('cell',100);
            $table->string('logo',100);
            $table->string('review_comment',255)->nullable();
            $table->foreignId('reviewed_by')->nullable();
            $table->enum('status', ['unverified','in-review','rejected','verified'])->default('unverified');
            $table->timestamps();
            
            // $table->timestamp('updated_on')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
