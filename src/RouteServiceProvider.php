<?php

namespace Toniel\CommonHelper;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    protected $namespace = 'Toniel\CommonHelper\Http\Controllers';

    public function map(){
        Route::namespace($this->namespace)->group(__DIR__.'/../routes/web.php');
    }
}
