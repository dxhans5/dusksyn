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
            $table->string('name');
            $table->string('sku')->unique();
            $table->text('description')->nullable();
            $table->decimal('selling_price', 10, 2)->default(0.00);
            $table->decimal('vendor_price', 10, 2)->default(0.00);
            $table->integer('in_stock')->default(0);
            $table->string('category_id')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('vendor_id')->nullable(); // Supplier ID or name
            $table->string('image_collection_id')->nullable();
            $table->string('status')->default('active'); // active, inactive, discontinued
            $table->string('added_by')->nullable(); // User ID of the person who added the product
            $table->string('updated_by')->nullable(); // User ID of the person who last updated the product
            $table->string('deleted_by')->nullable(); // User ID of the person who deleted the product
            $table->timestamp('added_at')->nullable();
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
