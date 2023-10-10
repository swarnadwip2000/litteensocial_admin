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
        Schema::create('news_feed_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',100)->nullable();
            $table->integer('news_type')->default(0);            
            $table->string('file')->nullable();
            $table->string('file_type',100)->nullable();
            $table->text('description')->nullable();
            $table->integer('visible_type')->default(0);
            $table->integer('parent_id')->default(0);
            $table->string('remember_token')->nullable();
           $table->string('tag',100)->nullable();
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
        Schema::dropIfExists('news_feed_tbl');
    }
};
