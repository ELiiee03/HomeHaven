<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('request_forms', function (Blueprint $table) {
            $table->id('RequestID');
            $table->foreignId('UserID')->constrained('users');
            $table->string('PropertyType');
            $table->string('HouseType');
            $table->decimal('Budget', 10, 2);
            $table->foreignId('RealEstateID')->constrained('real_estates');
            $table->date('AppointmentDate');
            $table->time('AppointmentTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_requests');
    }
};
