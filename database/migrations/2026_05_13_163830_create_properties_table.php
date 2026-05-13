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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Agent/Owner
            $table->foreignId('category_id')->constrained();
            $table->foreignId('location_id')->constrained();
            
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->string('type'); // sale, rent
            $table->string('status')->default('draft'); // draft, pending_review, published, sold, rented, archived
            
            // Physical attributes
            $table->integer('bedrooms')->default(0);
            $table->integer('bathrooms')->default(0);
            $table->decimal('area', 10, 2)->comment('Square feet/meters');
            $table->string('furnished_status')->nullable(); // furnished, unfurnished, semi-furnished
            $table->integer('build_year')->nullable();
            
            // Geographical attributes
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->string('address')->nullable();
            
            // Meta & SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            
            // Statistics
            $table->unsignedBigInteger('views_count')->default(0);
            
            $table->softDeletes();
            $table->timestamps();

            // Indexes for hot search paths
            $table->index(['status', 'type']);
            $table->index('price');
            $table->fullText(['title', 'description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
