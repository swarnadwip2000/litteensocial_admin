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
        Schema::create('comment_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',100)->nullable();
            $table->integer('comment_type')->default(0);   
            $table->integer('news_feed_id')->default(0);        
                   
            $table->integer('parent_id')->default(0);
            $table->text('comment')->nullable();  
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
        Schema::dropIfExists('comment_tbl');
    }
};
