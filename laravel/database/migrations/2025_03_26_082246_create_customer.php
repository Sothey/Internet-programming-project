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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);           // VARCHAR(100), not null
            $table->string('email', 100);          // VARCHAR(100), not null
            $table->string('address', 100)->nullable(); // VARCHAR(100), nullable
            $table->string('phone', 100)->nullable();   // VARCHAR(100), nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
