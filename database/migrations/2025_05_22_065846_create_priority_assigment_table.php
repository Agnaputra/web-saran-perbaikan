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
        Schema::create('priority_assignment', function (Blueprint $table) {
            $table->id('priority_Assignment_ID');
            $table->boolean('Criteria_name_here');
            $table->enum('risk_Level', ['High risk', 'Medium risk', 'Low risk']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('priority_assigment');
    }
};
