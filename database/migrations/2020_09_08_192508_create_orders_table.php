<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->string('email');
            $table->boolean('fulfillment_status')->default(0);
            $table->boolean('payment_status')->default(0);
            $table->foreignId('shop_id')->default(9999999);
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreignId('user_id')->default(9999999);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('product_id')->default(9999999);
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('price');
            $table->integer('quantity');
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
}
