<?php

namespace Toniel\CommonHelper\Tests\Feature;

use Orchestra\Testbench\TestCase;
use Toniel\CommonHelper\Facades\RupiahFacade;
use Toniel\CommonHelper\RouteServiceProvider;
use Toniel\CommonHelper\RupiahServiceProvider;

class CanReturnCorrectRupiahFormatTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            RupiahServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected function getApplicationAliases($app)
    {
        return [
            'RupiahFacade' => RupiahFacade::class,
        ];
    }
    public function testCanReturnCorrectRupiahFormat()
    {
       $this->get('/rupiah')->assertSuccessful()->assertSee("Rp 10.000");
    }
}
