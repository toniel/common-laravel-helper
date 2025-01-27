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
        RupiahFacade::shouldReceive('format')->with(1000000)->andReturn('Rp1.000.000,00');
        $this->assertEquals('Rp1.000.000,00', RupiahFacade::format(1000000));
    }

    public function testReturnCorrectSpelled()
    {
        RupiahFacade::shouldReceive('toWords')->with(1000000)->andReturn('satu juta');
        $this->assertEquals('satu juta', RupiahFacade::toWords(1000000));
    }

    public function testReturnSeribu()
    {
        RupiahFacade::shouldReceive('toWords')->with(1000)->andReturn('seribu');
        $this->assertEquals('seribu', RupiahFacade::toWords(1000));
    }

    public function testReturnCorrectParse()
    {
        RupiahFacade::shouldReceive('parseFromRupiah')->with('Rp1.000.000,00')->andReturn(1000000);
        $this->assertEquals(1000000, RupiahFacade::parseFromRupiah('Rp1.000.000,00'));
    }
}
