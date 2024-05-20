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
        Schema::create('superadmin_usuarios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre')->nullable();

            $table->string('email')->unique();
            $table->string('password');
            
            $table->string('remember_token')->nullable();
            $table->date('last_activity')->nullable();

            $table->timestampsTz();
        });

        Schema::create('superadmin_menu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->string('url')->nullable();
            $table->string('codigo');
            $table->string('codigo_padre')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_dashboard_package');
    }
};
