<?php

namespace Toniel\CommonHelper\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Toniel\CommonHelper\Facades\RupiahFacade;
use Toniel\CommonHelper\RupiahServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            RupiahServiceProvider::class,
        ];
    }

    protected function getApplicationAliases($app)
    {
        return [
            'RupiahFacade' => RupiahFacade::class,
        ];
    }
}
