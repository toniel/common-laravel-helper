<?php
namespace Toniel\CommonHelper\Tests\Unit;

use Orchestra\Testbench\TestCase;
use Toniel\CommonHelper\Facades\RupiahFacade;
use Toniel\CommonHelper\RupiahServiceProvider;

class RupiahTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            RupiahServiceProvider::class,
        ];
    }

    public function testReturnCorrectFormat()
    {
        RupiahFacade::shouldReceive('format')->with(1000000)->andReturn('Rp 1.000.000');
        $this->assertEquals('Rp 1.000.000', RupiahFacade::format(1000000));
    }

    public function testReturnCorrectSpelled()
    {
        RupiahFacade::shouldReceive('spelled')->with(1000000)->andReturn('satu juta');
        $this->assertEquals('satu juta', RupiahFacade::spelled(1000000));
    }

    public function testReturnSeribu()
    {
        RupiahFacade::shouldReceive('spelled')->with(1000)->andReturn('seribu');
        $this->assertEquals('seribu', RupiahFacade::spelled(1000));
    }
}
