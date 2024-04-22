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
            $table->bigIncrements('id');
            $table->biginteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->biginteger('subcategory_id')->unsigned()->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade')->onUpdate('cascade');
            $table->biginteger('lastlavel_id')->unsigned()->nullable();
            $table->foreign('lastlavel_id')->references('id')->on('lastlavels')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('brand_id')->nullable();
            $table->string('product_name');
            $table->string('product_code');
            $table->text('product_details');
            // $table->string('product_color');
            // $table->string('product_size');
            $table->integer('selling_price');
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->integer('status')->nullable();
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
