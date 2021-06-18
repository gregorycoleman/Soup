<?php

namespace Gregorycoleman\Souporm ;

use Illuminate\Support\Facades\Facade ;

/**
 * @see \Gregorycoleman\Souporm\Souporm
 */
class SoupormFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'souporm' ;
    }
}
