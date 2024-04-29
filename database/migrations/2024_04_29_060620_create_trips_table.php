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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('driver_id')->nullable();
            $table->enum('trip_status', []);
            $table->string('description');
            $table->float('source_lat');
            $table->float('source_lot');
            $table->float('destination_lat');
            $table->float('destination_lot');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('payment_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
