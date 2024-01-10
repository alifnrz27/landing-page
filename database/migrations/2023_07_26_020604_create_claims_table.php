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
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id');
            $table->foreignId('claim_type_id');
            $table->foreignId('change_type_id');
            $table->string('title');
            $table->text('description');
            $table->string('thumbnail_path');
            $table->integer('validity_duration');
            $table->integer('limit');
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('change_system_id')->nullable();
            $table->integer('exchange_rate');
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
        Schema::dropIfExists('claims');
    }
};
