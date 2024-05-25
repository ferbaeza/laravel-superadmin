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
            $table->integer('estado')->default(0);

            $table->timestampsTz();
        });

        Schema::create('superadmin_menu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->string('url')->nullable();
            $table->string('codigo');
            $table->string('codigo_padre')->nullable();

        });

        Schema::create('superadmin_roles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->string('codigo');
        });

        Schema::create('superadmin_permisos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
        });

        Schema::create('superadmin_roles_permisos', function (Blueprint $table) {
            // $table->uuid('id')->primary();
            $table->foreignUuid('id_rol')
                ->constrained('superadmin_roles')
                ->onDelete('restrict');

            $table->foreignUuid('id_permiso')
                ->constrained('superadmin_permisos')
                ->onDelete('restrict');
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
