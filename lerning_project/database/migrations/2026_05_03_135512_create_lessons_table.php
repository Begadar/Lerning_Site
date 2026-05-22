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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('lesson_id');
            $table->string('lesson_name');
            $table->string('lesson_topic');
            $table->string('lesson_image')->nullable();
            $table->unsignedInteger('lesson_time')->default(52);
            $table->boolean('lesson_is_finished')->default(false);
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
