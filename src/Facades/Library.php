<?php

namespace VendorName\Library\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VendorName\Library\Library
 */
class Library extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VendorName\Library\Library::class;
    }
}
