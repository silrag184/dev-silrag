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
        Schema::create('my_projects', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('project_title');
            $table->text('short_desc');
            $table->text('project_github')->nullable();
            $table->text('live_demo')->nullable();
            $table->text('image')->nullable();
            $table->text('picture')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_projects');
    }
};
