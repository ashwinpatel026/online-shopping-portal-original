<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->string('product_name');
            $table->string('product_brand');
            $table->decimal('price', 10, 2);
            $table->decimal('sale_price', 10, 2);
            $table->text('product_description');
            $table->string('product_image1')->nullable();
            $table->string('product_image2')->nullable();
            $table->string('product_image3')->nullable();
            $table->decimal('shipping_charge', 10, 2);
            $table->string('product_availability');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};