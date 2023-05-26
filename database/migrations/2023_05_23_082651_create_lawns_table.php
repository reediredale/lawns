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
        Schema::create('lawns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('urban_area');
            $table->string('state_code');
            $table->string('state');
            $table->string('postcode');
            $table->string('type');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('elevation');
            $table->string('population');
            $table->string('median_income');
            $table->string('area_sq_km');
            $table->string('local_government');
            $table->string('region');
            $table->string('time_zone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawns');
    }
};
