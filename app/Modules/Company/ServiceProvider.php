<?php

namespace App\Modules\Company;

use App\Modules\Company\Services\CompanyService;
use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');;
        $this->loadViewsFrom(__DIR__.'/Views', 'company');
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(CompanyService::class, function () {
            return new CompanyService();
        });

        $this->app->alias(CompanyService::class, 'company');
    }
}
