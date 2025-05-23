<?php

use App\Models\Car;
use App\Models\Customer;
use App\Models\Location;
use App\Models\User;
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
        Schema::create('orders', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(User::class)->nullable(false);
            $table->foreignIdFor(Car::class)->nullable(false);
            $table->foreignIdFor(Customer::class)->nullable();
            $table->date('start_date')->nullable(false);
            $table->date('end_date')->nullable(false);
            $table->foreignIdFor(Location::class, 'pickup_location_id')->nullable();
            $table->foreignIdFor(Location::class, 'dropoff_location_id')->nullable();
            $table->time('pickup_time')->nullable(false);
            $table->time('dropoff_time')->nullable(false);
            $table->string('own_license_plate')->nullable();

            $table->json('document_contract')->nullable();
            $table->json('document_declaration')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
