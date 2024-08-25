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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->string('work_platform');
            $table->string('work_category');
            $table->string('client_name')->nullable();
            $table->string('client_designation')->nullable();
            $table->text('message');
            $table->text('image')->nullable();
            $table->text('starting_date')->nullable();
            $table->text('ending_date')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
