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
            $table->string('nav_bar_background')->nullable();
            
            $table->string('profile_picture')->nullable();
            $table->string('mobile',14)->unique()->nullable();;
            $table->string('email',80)->unique();
            $table->string('firstname',80)->nullable();
            $table->boolean('premium')->nullable();
            $table->boolean('bgc_verified')->nullable();
            $table->string('lastname',80)->nullable();
            $table->string('username',80)->nullable();
            $table->text('address')->nullable();
            $table->text('story')->nullable();
            $table->text('fb_link')->nullable();
            $table->text('youtube_link')->nullable();
            $table->text('instagram_link')->nullable();
            $table->text('tiktok_link')->nullable();

            $table->string('pincode',6)->nullable();
            $table->string('city',80)->nullable();
            $table->string('password',80)->nullable();
            $table->string('birthday',80)->nullable();   

            $table->unsignedBigInteger('registration_type')->nullable();
            $table->string('user_id',100)->nullable();

            $table->string('stripe_customer_id',100)->nullable();
            $table->string('agora_id',100)->nullable();


            $table->string('otp',80)->nullable();
            $table->datetime('otp_time')->nullable();
          
            $table->string('school',200)->nullable();   
            $table->string('interest',250)->nullable();   
           

            $table->unsignedBigInteger('country')->nullable()->unsigned(); 
            $table->foreign('country')->references('country_id')->on('country')->onDelete('cascade');           
            $table->unsignedBigInteger('status')->nullable()->unsigned();
            $table->foreign('status')->references('status_id')->on('status')->onDelete('cascade'); 
            $table->string('remember_token')->nullable();
            $table->datetime('email_verified_at')->nullable();
            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->string('ip')->nullable();
            $table->string('fcm_token')->nullable();
            $table->boolean('is_first_login')->nullable();
            $table->boolean('is_dob_disable')->nullable();
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
