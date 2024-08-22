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
        Schema::create('team_infos', function (Blueprint $table) {
            $table->id();
            $table->string('t_name');
            $table->string('designation');
            $table->text('t_fburl')->nullable();
            $table->text('t_github')->nullable();
            $table->text('t_linked')->nullable();
            $table->text('web_url')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_infos');
    }
};
