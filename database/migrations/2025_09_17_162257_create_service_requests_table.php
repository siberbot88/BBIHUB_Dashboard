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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users');
            $table->foreignId('workshop_id')->constrained('workshops');
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->foreignId('service_type_id')->nullable()->constrained('service_types')->nullOnDelete();
            $table->dateTime('scheduled_date');
            $table->enum('status', ['Pending', 'Accepted', 'In Progress', 'Completed', 'Cancelled'])->default('Pending');
            $table->foreignId('technician_id')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('payment_status', ['Unpaid', 'Paid'])->default('Unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
