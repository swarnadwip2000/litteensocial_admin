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
        Schema::create('stories_like', function (Blueprint $table) {
            $table->id();
             $table->string('user_id',100)->nullable(); 
            $table->integer('like_type')->default(0);
            $table->string('stories_id',100)->nullable();   
         

                      
            $table->string('ip')->nullable();  
            $table->integer('status')->default(0); 
           
           
            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable(); 
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
        Schema::dropIfExists('stories_like');
    }
};
