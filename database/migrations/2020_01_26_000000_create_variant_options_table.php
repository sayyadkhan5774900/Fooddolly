<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariantOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variant_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->integer('product_id')->unsigned()->nullable()->default(null);
        //    $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('set null');

            $table->integer('variant_id')->unsigned()->nullable()->default(null);
          //  $table->foreign('variant_id')->references('id')->on('variants')->onUpdate('cascade')->onDelete('set null');

            $table->string('name');
            $table->integer('price');

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
        Schema::dropIfExists('variant_options');
    }
}
