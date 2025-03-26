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
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();                                    // Auto-incrementing primary key
            $table->bigInteger('order_id')->unsigned();      // Unsigned big integer for FK to orders
            $table->bigInteger('product_id')->unsigned();    // Unsigned big integer for FK to products
            $table->double('pricing');                         // double, not null
            $table->integer('quantity')->unsigned();         // int, unsigned, not null
            $table->timestamps();                            // Adds created_at and updated_at columns

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_product');
    }
};