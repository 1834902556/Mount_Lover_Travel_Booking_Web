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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->integer('place_id');
            $table->integer('spot_id');
            $table->string('title');
            $table->string('code')->nullable()->unique();
            $table->string('category')->nullable();
            $table->integer('person');
            $table->string('duration');
            $table->string('total_cost')->nullable();
            $table->string('discount')->nullable();
            $table->text('sort_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->text('image')->nullable();
            $table->integer('hit_count')->default(0);
            $table->integer('booking_count')->default(0);
            $table->tinyInteger('featured_status')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
