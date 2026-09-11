<?php

namespace Uom\UomUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UomUiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
         $this->mergeConfigFrom(
        __DIR__ . '/../config/uomuitheme.php',
        'uomuitheme'
    );
    }

    public function boot(): void
    {
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'uomui'
        );
    
        Blade::componentNamespace(
            'Uom\\UomUi\\Components',
            'uomui'
        );
    
        $this->publishes([
            __DIR__ . '/../dist' => public_path('vendor/uomui'),
        ], 'uomui-assets');
    
        $this->publishes([
            __DIR__ . '/../config/uomuitheme.php' => config_path('uomuitheme.php'),
        ], 'uomui-theme');
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Uom\UomUi\Console\BuildThemeCommand::class,
                \Uom\UomUi\Console\MakeLayoutCommand::class,

            ]);
        }
    }
}