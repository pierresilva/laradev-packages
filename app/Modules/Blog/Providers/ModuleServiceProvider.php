<?php

namespace App\Modules\Blog\Providers;

use pierresilva\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('blog', 'Resources/Lang', 'app'), 'blog');
        $this->loadViewsFrom(module_path('blog', 'Resources/Views', 'app'), 'blog');
        $this->loadMigrationsFrom(module_path('blog', 'Database/Migrations', 'app'));
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('blog', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('blog', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
