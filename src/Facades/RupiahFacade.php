<?php

namespace Toniel\CommonHelper\Facades;

use Illuminate\Support\Facades\Facade;

class RupiahFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rupiah';
    }
}
