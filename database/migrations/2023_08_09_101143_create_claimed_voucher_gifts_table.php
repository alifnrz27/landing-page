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
        Schema::create('claimed_voucher_gifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('claim_id');
            $table->foreignId('brand_id');
            $table->string('code')->unique();
            $table->date('valid_until');
            $table->datetime('use_date')->nullable();
            $table->foreignId('redeem_store')->nullable();
            $table->boolean('in_store')->default(false);
            $table->string('address')->nullable();
            $table->string('receipt_number')->nullable();
            $table->string('expedition')->nullable();
            $table->integer('exchange_rate');
            $table->boolean('is_used')->default(false);
            $table->boolean('is_delivered')->default(false);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claimed_voucher_gifts');
    }
};
