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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('m_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('f_designation')->nullable();
            $table->string('s_designation')->nullable();
            $table->text('s_description')->nullable();
            $table->longText('m_description')->nullable();
            $table->text('note')->nullable();
            $table->text('main_logo')->nullable();
            $table->text('sec_logo')->nullable();
            $table->text('pic_logo')->nullable();
            $table->text('logo_icon')->nullable();
            $table->text('logo_icon1')->nullable();
            $table->text('logo_icon2')->nullable();
            $table->text('fb_url')->nullable();
            $table->text('linked_in_url')->nullable();
            $table->text('git_url')->nullable();
            $table->text('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('copy_right')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
