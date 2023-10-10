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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('amount',100)->nullable();
            $table->string('payment_method',100)->nullable();
            $table->string('user_id',100)->nullable();
            $table->string('orderid',100)->nullable();            
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
        Schema::dropIfExists('transaction');
    }
};
