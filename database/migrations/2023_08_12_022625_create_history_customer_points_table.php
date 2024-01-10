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
        Schema::create('history_customer_points', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('point_id')->default(0);
            $table->string('description');
            $table->integer('point');
            $table->boolean('is_income_point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_customer_points');
    }
};
