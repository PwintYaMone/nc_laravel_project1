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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_no')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email');
            $table->string('customer_phoneno')->nullable();
            $table->string('customer_city')->nullable();
            $table->string('customer_address')->nullable();   
            $table->string('shipping_name')->nullable();
            $table->string('shipping_email');
            $table->string('shipping_phoneno')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_address')->nullable(); 
            $table->text('purchased_items')->nullable();   
            $table->decimal('grand_total')->nullable(); 
            $table->string('payment_receipt')->nullable(); 
            $table->Integer('cash_on_deli')->default(0); 
            $table->Integer('order_confirm');
            


              
  
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
        Schema::dropIfExists('orders');
    }
};
