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
        Schema::create('oil_change_details', function (Blueprint $table) {
            $table->id();
            $table->decimal('current_odometer');
            $table->timestamp('previous_oil_change_date');
            $table->decimal('previous_odometer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oil_change_details');
    }
};
