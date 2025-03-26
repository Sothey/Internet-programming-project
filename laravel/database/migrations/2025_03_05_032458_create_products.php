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
            $table->id();                                    // Auto-incrementing primary key
            $table->string('name');                          // A string column for the product name
            $table->bigInteger('category_id')->unsigned();   // An unsigned big integer for the foreign key to categories
            $table->double('pricing');                         // A double column for the product price
            $table->text('description')->nullable();         // A text column for the description, allowing null values
            $table->json('images')->nullable();              // A JSON column for storing images, allowing null values
            $table->timestamps();                            // Adds created_at and updated_at columns

            $table->foreign('category_id')->references('id')->on('categories');
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
