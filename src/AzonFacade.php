<?php

namespace Compara\Azon;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Compara\Azon\Skeleton\SkeletonClass
 */
class AzonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'azon';
    }
}
