<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // auto-increment id
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // foreign key
            $table->string('name'); // product name
            $table->string('image'); // stores file path for image like "products/banana.jpg"
            $table->decimal('price', 10, 2); // price with 2 decimals
            $table->text('description')->nullable(); // optional description
            $table->timestamps(); // optional but recommended
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
