<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyListings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_listings', function (Blueprint $table) {
            $table->id();
            $table->string('title',252);
            $table->enum('type', ['home','commercial'])->default('home');
            $table->enum('purpose', ['sale','rent'])->default('sale');
            $table->string('address',252);
            $table->integer('size');
            $table->integer('price');
            $table->text('description',1000);
            $table->timestamps();
            $table->softDeletes();
            $table->enum('status', ['active', 'sold Out','pending','unlist','rejected'])->default('active');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_listings');

    }
}
