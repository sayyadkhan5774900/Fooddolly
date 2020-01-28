<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('restaurateur_id')->unsigned();
          //  $table->foreign('restaurateur_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->text('address')->nullable();
            $table->text('desplay_address')->nullable();
            $table->text('description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('slug')->unique();
            $table->string('logo_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->enum('status', ['expired', 'active', 'pending'])->default('pending');
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
        Schema::dropIfExists('restaurants');
    }
}
