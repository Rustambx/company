<?php

namespace App\Modules\Company\Facades;

use Illuminate\Support\Facades\Facade;

class CompanyFacade extends Facade
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
        return 'company';
    }
}
