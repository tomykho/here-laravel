<?php

namespace TomyKho\Here\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TomyKho\Here\Here
 */
class Here extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'here-laravel';
    }
}
