<?php

namespace Appoly\Payrun;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Appoly\Payrun\Skeleton\SkeletonClass
 */
class PayrunFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'payrun';
    }
}
