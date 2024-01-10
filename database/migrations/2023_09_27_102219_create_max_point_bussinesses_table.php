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
        Schema::create('max_point_bussinesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->integer('type'); // 1 bulanan, 2 tahunan
            $table->integer('max_point');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('max_point_bussinesses');
    }
};
