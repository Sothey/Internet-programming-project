<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->softDeletes(); // Adds a deleted_at column
        });

        Schema::table('products', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('wishlists', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('wishlists', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
