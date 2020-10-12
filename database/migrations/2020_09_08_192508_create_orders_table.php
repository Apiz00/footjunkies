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
            $table->timestamps();
            $table->text('cart');
            $table->text('address');
            $table->string('name');
            $table->double('rating')->nullable();
            $table->text('comment')->nullable();
            $table->boolean('fulfillment_status')->default(0);
            $table->double('table')->nullable();
            $table->double('total_price')->nullable();
            $table->integer('shop_id')->nullable();
            $table->unsignedInteger('user_id')->default(9999999);
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
