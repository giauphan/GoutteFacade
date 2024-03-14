<?php

namespace Giauphan\Goutte;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Giauphan\Goutte\Goutte
 */
class GoutteFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'goutte';
    }
}
