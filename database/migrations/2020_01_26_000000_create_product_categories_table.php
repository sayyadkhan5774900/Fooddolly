<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('parent_id')->unsigned()->nullable()->default(null);
         //   $table->foreign('parent_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');

            $table->integer('restaurant_id')->unsigned()->nullable()->default(null);
         //   $table->foreign('restaurant_id')->references('id')->on('restaurants')->onUpdate('cascade')->onDelete('set null');

            $table->string('name');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('product_categories');
    }
}
