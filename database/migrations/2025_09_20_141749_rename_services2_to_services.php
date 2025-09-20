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
        Schema::rename('services2', 'services');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('services', 'services2');
    }
};
