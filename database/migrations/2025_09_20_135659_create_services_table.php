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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->string('service_url');
            $table->string('user_id');
            $table->string('account_id');
            $table->string('status');
            $table->string('type');
            $table->string('subscription_start');
            $table->string('subscription_end');
            $table->string('reference');
            $table->string('basic')->nullable();
            $table->string('plus')->nullable();
            $table->string('premium')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
