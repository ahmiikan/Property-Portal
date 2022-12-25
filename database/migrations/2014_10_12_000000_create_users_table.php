<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',252)->unique();
            $table->string('cell_no',255)->unique();
            $table->string('password');
            $table->enum('user_status', ['active','blocked'])->default('active');        
            $table->timestamps();
            $table->string('reason')->nullable();
            $table->foreignId('created_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('updated_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('deleted_by')->nullable()->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('image',100)->nullable();
            $table->string('user_feedback')->nullable();
            $table->timestamp('deletion_request')->nullable();


            // $table->string('address',252)->nullable();
            $table->foreignId('city_id');
            $table->foreignId('country_id');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
     


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
