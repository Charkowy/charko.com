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
            $table->foreignId('category_id')->constrained('categories')->nullable(); 
            $table->string('title');
            $table->string('description');
            $table->enum('state', ['available', 'unavailable', 'unknown']);
            $table->timestamps();
            $table->softDeletes();
           
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
            $table->dropForeign(['category_id']); 
            $table->dropIndex(['category_id']); 
        });
        
        Schema::dropIfExists('products');
    }
};