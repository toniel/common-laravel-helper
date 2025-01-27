<?php

namespace Toniel\CommonHelper\Http\Controllers;

use Toniel\CommonHelper\Facades\RupiahFacade;

class RupiahController
{
    public function index()
    {
      return RupiahFacade::format(10000);
    }
}
