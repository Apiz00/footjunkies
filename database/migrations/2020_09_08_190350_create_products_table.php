<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('product_name');
            $table->float('product_price');
            $table->string('product_category');
            $table->string('product_color');
            $table->string('product_description');
            $table->string('product_brand')->nullable();
            $table->bigInteger('product_quantity');
            $table->string('product_size')->nullable();
            $table->string('product_location');
            $table->string('image_url', 80)->nullable();
            $table->foreignId('shop_id')->default(9999999);
            $table->foreign('shop_id')->references('id')->on('shops');
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
        Schema::dropIfExists('products');
    }
}
