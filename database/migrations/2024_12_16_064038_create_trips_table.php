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
			$table->string('trip_no')->unique();
			$table->json('current_location')->nullable();
			$table->string('bus_line');
			$table->string('bus_no');
			$table->string('origin');
			$table->string('destination');
			$table->date('trip_date');
			$table->time('departure_time');
			$table->time('arrival_time');
			$table->integer('available_seats')->default(0);
			$table->float('ticket_price', 8, 2)->default(0);
			$table->enum('status', ['scheduled', 'cancelled', 'completed'])->default('scheduled');
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
