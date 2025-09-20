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
        Schema::table('users', function (Blueprint $table) {
            $table->string('middle_name')->after('name')->nullable();
            $table->string('last_name')->after('middle_name')->nullable();
            $table->string('account_id')->after('email_verified_at');
            $table->string('organization')->after('account_id')->nullable();
            $table->string('logged_out_at')->after('password')->nullable();
            $table->string('session_key')->after('remember_token')->nullable();
            $table->boolean('active_at')->after('session_key')->default(0);
            $table->string('status')->after('active_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
