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
        Schema::create('customer_deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // contoh: "Delivery Moment Bpk. Hendra - Geely EX5"
            $table->string('customer_name')->nullable();
            $table->string('car_model')->nullable(); // Geely EX5, EX2, Starray, Coolray
            $table->string('image'); // path file gambar atau URL
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_deliveries');
    }
};