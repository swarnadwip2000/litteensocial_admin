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
        Schema::create('advertiser', function (Blueprint $table) {
         
            $table->id();
       
            $table->string('mobile',14)->unique();
            $table->string('email',80)->unique();
            $table->string('firstname',80);
            $table->integer('sendcompanyaddress')->default('0');
            $table->string('company_name',80)->nullable();            
            $table->string('lastname',80)->nullable();
            $table->text('company_address')->nullable();
            $table->text('billing_address')->nullable();
            $table->string('cc_type',50)->nullable();  
            $table->string('cc_number',36)->nullable();       
            $table->string('password',100)->nullable();
            $table->string('cc_exp_month',50)->nullable();
            $table->string('cc_exp_year',50)->nullable();
            $table->string('cc_name',150)->nullable();
            $table->string('cc_cvc',5)->nullable();
       
           
            $table->string('remember_token')->nullable();
            $table->integer('create_user');
            $table->integer('update_user');
            $table->string('ip')->nullable();
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
        Schema::dropIfExists('advertiser');
    }
};
