<?php

namespace App\Modules\Salary;

use App\Modules\Salary\Services\SalaryService;
use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'salary');
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(SalaryService::class, function () {
            return new SalaryService();
        });

        $this->app->alias(SalaryService::class, 'salary');
    }
}
