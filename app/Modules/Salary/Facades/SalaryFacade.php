<?php

namespace App\Modules\Salary\Facades;

use Illuminate\Support\Facades\Facade;

class SalaryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'salary';
    }
}
