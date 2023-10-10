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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id',100)->nullable();
            $table->string('item_name',255)->nullable();
            $table->decimal('item_price', 10, 2)->nullable();
            $table->decimal('paid_amount', 10, 2)->nullable();
            
            $table->string('item_price_currency',20)->nullable();
            $table->string('paid_amount_currency',20)->nullable();
            $table->string('txn_id',80)->nullable();
            $table->string('payment_status',25)->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
