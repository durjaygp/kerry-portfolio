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
            // Hire Section
            $table->text('hire_section_title')->nullable();
            $table->text('hire_section_paragraph')->nullable();
            $table->text('hire_section_link')->nullable();
            $table->text('hire_section_button_text')->nullable();
            $table->string('hire_section_status')->nullable();
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
