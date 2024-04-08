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
        Schema::create("vehicle", function (Blueprint $table) {
            $table->id("id_vehicle");
            $table->string("vehicle_brand")->nullable(false);
            $table->integer("doors_number")->nullable(false);
            $table->timestamp("model");
            $table->boolean("zeroKm")->default(false);
            $table->string("color");
            $table->integer("cylinder_capacity_cc");
            $table->integer("horse_power");
            $table->text('vehicle_descriprion')->nullable();
            $table->binary('picture')->unique()->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
