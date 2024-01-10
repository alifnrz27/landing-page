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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->string('title');
            $table->text('description');
            $table->integer('limit');
            $table->string('thumbnail_path')->nullable();
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('promotions');
    }
};
