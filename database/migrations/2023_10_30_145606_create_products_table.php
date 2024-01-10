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
            $table->foreignId('brand_id');
            $table->string('title');
            $table->text('description');
            $table->string('thumbnail_path');
            $table->date('end_date');
            $table->string('price');
            $table->string('code');
            $table->string('stock');
            $table->boolean('is_all_stores')->default(false);
            $table->boolean('status')->default(true);
            $table->boolean('status_by_admin')->default(true);
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
