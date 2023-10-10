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
        Schema::create('subscribe', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('days',100)->nullable();        
            $table->decimal('subscribe_price', 10, 2)->nullable(); 
            $table->string('subscribe_title',100)->nullable();
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
        Schema::dropIfExists('subscribe');
    }
};
