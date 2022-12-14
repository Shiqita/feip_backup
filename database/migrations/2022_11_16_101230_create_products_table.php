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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('slug',255)->unique();
//            $table->string('factory_id');
            $table->text('description');
//            $table->text('image')->nullable();
            $table->unsignedDouble('price', 8, 2);
            $table->timestamps();

            $table->foreignId('product_category_id');
            $table->foreign('product_category_id')->references('id')->on('product_categories')->restrictOnDelete();
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
};
