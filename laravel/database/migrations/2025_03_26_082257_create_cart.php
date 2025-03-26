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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();                                    // Auto-incrementing primary key
            $table->integer('quantity')->default(1);         // int, not null, default 1
            $table->bigInteger('product_id')->unsigned();    // Unsigned big integer for FK to products
            $table->bigInteger('customer_id')->unsigned();   // Unsigned big integer for FK to customers
            $table->timestamps();                            // Adds created_at and updated_at columns

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
