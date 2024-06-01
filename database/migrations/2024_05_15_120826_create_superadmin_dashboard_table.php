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
        Schema::create('superadmin_roles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->smallInteger('codigo');
        });

        Schema::create('superadmin_usuarios', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('estado')->default(0);

            $table->foreignUuid('fk_role_id')
                ->constrained('superadmin_roles')
                ->references('id')
                ->onDelete('restrict');

            $table->timestampsTz();
        });

        Schema::create('superadmin_menu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->string('route')->nullable();
            $table->string('icon')->nullable();
            $table->string('codigo');
            $table->string('codigo_padre')->nullable();

        });

        Schema::create('superadmin_database_tablas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
            $table->jsonb('columnas');
        });


        Schema::create('superadmin_permisos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nombre');
        });

        Schema::create('superadmin_roles_permisos', function (Blueprint $table) {
            // $table->uuid('id')->primary();
            $table->foreignUuid('fk_role_id')
                ->constrained('superadmin_roles')
                ->references('id')
                ->onDelete('restrict');

            $table->foreignUuid('fk_permiso_id')
                ->constrained('superadmin_permisos')
                ->references('id')
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
