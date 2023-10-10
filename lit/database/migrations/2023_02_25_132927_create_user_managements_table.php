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
        Schema::create('user_managements', function (Blueprint $table) {
            $table->id();
            $table->string('background_image')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('mobile',14)->unique();
            $table->string('email',80)->unique();
            $table->string('firstname',80);
            $table->integer('premium')->default('0');
            $table->integer('bgc_verified')->default('0');
            $table->string('lastname',80);
            $table->string('username',80);
            $table->text('address')->nullable();
            $table->string('pincode',6)->nullable();
            $table->string('city',80)->nullable();
            $table->string('password',80)->nullable();
            $table->unsignedBigInteger('country')->default('0'); 
            $table->foreign('country')->references('country_id')->on('country')->onDelete('cascade');           
            $table->unsignedBigInteger('status')->default('0');
            $table->foreign('status')->references('status_id')->on('status')->onDelete('cascade'); 
            $table->string('remember_token')->nullable();
            $table->integer('create_user');
            $table->integer('update_user');
            $table->string('ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_managements');
    }
};
