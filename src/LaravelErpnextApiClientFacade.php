<?php

namespace Firoz\LaravelErpnextApiClient;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Firoz\LaravelErpnextApiClient\Skeleton\SkeletonClass
 */
class LaravelErpnextApiClientFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-erpnext-api-client';
    }
}
