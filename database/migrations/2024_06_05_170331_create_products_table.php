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
            $table->id(); // Primary key, unsignedBigInteger by default
            $table->foreignId('brand_id')->constrained('brands')->nullable();  
            $table->string('title');
            $table->string('description');
            $table->integer('price');
            $table->enum('state', ['available', 'unavailable', 'unknown']);
            $table->timestamps();
            $table->softDeletes();
        });
    
        Schema::create('categories_products', function (Blueprint $table) {
        $table->id();
        $table->foreignId('category_id')->constrained();
        $table->foreignId('product_id')->constrained();
        $table->unique(['category_id', 'product_id']);
        $table->timestamps();
        });

}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['brand_id']); // Drop the foreign key constraint first
            $table->dropIndex(['brand_id']); // Then drop the index
        });
        
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories_products');
    }
};