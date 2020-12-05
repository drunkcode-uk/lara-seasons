<?php

namespace Drunkcode\LaraSeasons;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Drunkcode\LaraSeasons\Skeleton\SkeletonClass
 */
class LaraSeasonsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lara-seasons';
    }
}
