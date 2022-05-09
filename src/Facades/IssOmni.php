<?php

namespace Bildvitta\IssOmni\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bildvitta\IssOmni\IssOmni
 */
class IssOmni extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iss-omni';
    }
}
