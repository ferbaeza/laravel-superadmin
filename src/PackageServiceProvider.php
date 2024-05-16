<?php

namespace Baezeta\Admin;

use Illuminate\Support\ServiceProvider;
use Baezeta\Admin\Shared\Traits\PackageTrait;
use Baezeta\Admin\Shared\Laravel\Bindings\TrazerBindings;
use Baezeta\Admin\Shared\Laravel\Console\SuperAdminCommand;
use Baezeta\Admin\Shared\Laravel\Middleware\SuperAdminMiddleware;
use Baezeta\Admin\Shared\Laravel\Middleware\TransaccionMiddleware;

class PackageServiceProvider extends ServiceProvider
{
    use PackageTrait;
    /**
     * Registrar los servicios de la aplicación
     * @return void
     */
    protected function registerServices()
    {
        $this->registerBindings();
        $this->registerCommands();
        $this->registerMiddleware();
    }
    /**
     * Registrar los bindings de la aplicación
     */
    protected function registerBindings()
    {
        foreach ($this->testSingletons() as $key => $value) {
            is_numeric($key)
            ? $this->app->singleton($value)
            : $this->app->singleton($key, $value);
        }

    }
    /**
     * Registrar los comandos de la aplicación
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SuperAdminCommand::class,
            ]);
        }
    }
    /**
     * Registrar package middleware.
     *
     * @return void
     */
    protected function registerMiddleware()
    {
        $this->app['router']->aliasMiddleware('superadmin.dashboard', SuperAdminMiddleware::class);
        $this->app['router']->aliasMiddleware('transaccion', TransaccionMiddleware::class);
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerServices();

        /** Registrar Routes */
        $this->loadRoutesFrom(__DIR__. '/Shared/Laravel/Web/PackageRoutes.php');
        /** Registrar Views */
        /** Primer argumento es el directorio donde se encuentra la vista, el segundo argumento el nombre del paquete */
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'plantilla');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');


        $this->mergeConfigFrom(__DIR__ . '/../config/package.php', 'package');
    }
}