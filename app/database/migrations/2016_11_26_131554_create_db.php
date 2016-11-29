<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDb extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //User_Types
        Schema::create('user_types', function($table) {
            $table->increments('id');
            $table->String('user_type');
            $table->timestamps();
        });
        //Users
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->String('username');
            $table->string('password');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->integer('user_type');
            $table->foreign('user_type')->references('id')->on('user_types')->onDelete('cascade');
            $table->text('address');
            $table->timestamps();
        });
        //Products
        Schema::create('products', function($table) {
            $table->increments('id');
            $table->text('description');
            $table->string('title');
            $table->double('price');
            $table->integer('rating');
            $table->timestamps();
        });

        //Categories
        Schema::create('categories', function($table) {
            $table->increments('id');
            $table->string('category');
            $table->timestamps();
        });

        //Sizes
        Schema::create('sizes', function($table) {
            $table->increments('id');
            $table->string('size');
            $table->timestamps();
        });


        //Orders
        Schema::create('orders', function($table) {
            $table->increments('id');
            $table->string('order_id');
            $table->double('total_price');
            $table->integer('customer_id');
            $table->timestamps();
        });

        //Order_products
        Schema::create('order_products', function($table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('order_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->timestamps();
        });

        //product_images A product can have many description images
        Schema::create('product_images', function($table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });

        //product_sizes A product can come in many sizes
        Schema::create('product_sizes', function($table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('size_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('user_types');
        Schema::drop('users');
        Schema::drop('products');
        Schema::drop('categories');
        Schema::drop('sizes');
        Schema::drop('orders');
        Schema::drop('order_products');
        Schema::drop('product_images');
        Schema::drop('product_sizes');
    }

}
