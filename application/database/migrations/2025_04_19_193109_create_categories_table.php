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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('status')->default('active'); // active, inactive
            $table->bigInteger('parent_id')->default(0); // ID of the parent category, 0 if no parent
            $table->string('store_id')->default(env('STORE_ID', 'UNK')); // Default store ID for the category
            $table->string('added_by')->nullable(); // User ID of the person who added the product
            $table->string('updated_by')->nullable(); // User ID of the person who last updated the product
            $table->timestamps();
            $table->softDeletes(); // Soft delete column
            $table->string('deleted_by')->nullable(); // User ID of the person who deleted the category
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
