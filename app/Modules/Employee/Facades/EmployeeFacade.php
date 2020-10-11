<?php

namespace App\Modules\Employee\Facades;

use Illuminate\Support\Facades\Facade;

class EmployeeFacade extends Facade
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
        return 'employee';
    }
}
