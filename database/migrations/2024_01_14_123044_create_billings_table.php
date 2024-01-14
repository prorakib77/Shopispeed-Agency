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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('plane_email');
            $table->string('plane_phone')->nullable();
            $table->string('plane_website')->nullable();
            $table->string('plane_type')->nullable();
            $table->longText('plane_details')->nullable();
            $table->string('plane_key');
            $table->string('plane_duration');
            $table->string('plane_status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
