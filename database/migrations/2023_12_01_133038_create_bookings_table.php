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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('package_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('room');
            $table->string('number_of_guests');
            $table->string('amount');
            $table->string('special_requests');
            $table->string('pickup_point');           
            $table->string('status')->default('pending');
            $table->string('transanction_id')->unique();
            $table->string('payment_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
