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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->onDelete('cascade');
            $table->foreignId('property_type_id')->constrained('property_types')->onDelete('cascade');
            $table->string('project_name')->nullable();
            $table->string('bhk_type')->nullable();
            $table->string('property_status')->nullable();
            $table->decimal('total_price', 15, 2)->nullable();
            $table->decimal('price_per_sq_ft', 10, 2)->nullable();
            $table->string('carpet_area')->nullable();
            $table->string('builtup_area')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('floor_number')->nullable();
            $table->string('total_floors')->nullable();
            $table->string('facing')->nullable();
            $table->string('furnishing_status')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('balconies')->nullable();
            $table->string('cover_image')->nullable();
            $table->json('property_images')->nullable();
            $table->string('videos')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->json('amenities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
