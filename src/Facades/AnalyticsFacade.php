<?php

namespace Tec\Analytics\Facades;

use Tec\Analytics\Analytics;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Tec\Analytics\Analytics
 */
class AnalyticsFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Analytics::class;
    }
}
