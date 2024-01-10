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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('brand_id');
            $table->string('name');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('subdistrict');
            $table->string('urban_village');
            $table->string('postal_code');
            $table->boolean('status_by_admin')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
