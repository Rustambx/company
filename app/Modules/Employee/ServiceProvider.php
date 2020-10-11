<?php

namespace App\Modules\Employee;

use App\Modules\Employee\Services\EmployeeService;
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
        $this->loadViewsFrom(__DIR__.'/Views', 'employee');
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(EmployeeService::class, function () {
            return new EmployeeService();
        });

        $this->app->alias(EmployeeService::class, 'employee');
    }
}
