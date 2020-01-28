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

            $table->integer('restaurant_id')->unsigned()->nullable();
        //    $table->foreign('restaurant_id')->references('id')->on('restaurants')->onUpdate('cascade')->onDelete('set null');

            $table->integer('category_id')->unsigned()->nullable();
        //  $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');

            $table->string('name');
            $table->integer('price');
            $table->integer('min_quantity_to_order')->nullable();
            $table->integer('max_quantity_per_order')->nullable();
            $table->text('description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->enum('status', ['active', 'inactive', 'block'])->default('inactive');
            $table->boolean('featured')->default(0);

            $table->softDeletes();
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
