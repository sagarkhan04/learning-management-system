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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('youtube_link');
            $table->string('title');
            $table->text('description');
            $table->string('review');
            $table->integer('lesson')->nullable();
            $table->string('video')->nullable();
            $table->string('quiz')->nullable();
            $table->string('topic')->nullable();
            $table->string('resource')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('old_price', 10, 2)->nullable();
            $table->string('curriculum_title')->nullable();
            $table->string('curriculum_sub_title')->nullable();
            $table->string('video_or_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
