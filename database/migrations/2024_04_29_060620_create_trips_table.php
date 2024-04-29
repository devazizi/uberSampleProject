<?php

use App\Enums\TripStatusEnum;
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
            $table->enum('trip_status', TripStatusEnum::TRIP_STATUS_ENUM);
            $table->string('description');
            $table->float('source_lat');
            $table->float('source_lot');
            $table->float('destination_lat');
            $table->float('destination_lot');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('payment_id')->nullable();
            $table->unsignedInteger('suggest_driver_id')->nullable();
            $table->enum('suggest_driver_status', TripStatusEnum::SUGGESTED_DRIVER_STATUS_ENUM);
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
