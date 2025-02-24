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
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('subcategory_name');
            $table->text('subcategory_description')->nullable();
            $table->unsignedBigInteger('category_id'); // Foreign key for the category
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Link to the categories table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};