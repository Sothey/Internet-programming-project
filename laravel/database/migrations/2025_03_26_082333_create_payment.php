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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();                                    // Auto-incrementing primary key
            $table->timestamp('payment_date');               // timestamp, not null
            $table->string('payment_method', 100)->nullable(); // VARCHAR(100), nullable
            $table->decimal('amount', 10, 2)->nullable();    // decimal(10,2), nullable
            $table->bigInteger('order_id')->unsigned();      // Unsigned big integer for FK to orders
            $table->bigInteger('customer_id')->unsigned();   // Unsigned big integer for FK to customers
            $table->timestamps();                            // Adds created_at and updated_at columns

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
