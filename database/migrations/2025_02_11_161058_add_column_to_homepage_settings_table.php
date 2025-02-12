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
        Schema::table('homepage_settings', function (Blueprint $table) {
            $table->text('education_section_title')->nullable();
            $table->text('education_section_paragraph')->nullable();
            $table->text('education_section_status')->nullable();

            $table->text('experience_section_title')->nullable();
            $table->text('experience_section_paragraph')->nullable();
            $table->text('experience_section_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homepage_settings', function (Blueprint $table) {
            //
        });
    }
};
