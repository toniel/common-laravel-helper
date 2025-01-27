<?php

namespace Toniel\CommonHelper;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Toniel\CommonHelper\Facades\RupiahFacade;

class RupiahServiceProvider extends ServiceProvider
{ 
    public function boot()
    {
        // $this->publishes([
        //     __DIR__ . '/../config/rupiah.php' => config_path('rupiah.php'),
        // ]);

        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
       
    }
    public function register()
    {
        // $this->mergeConfigFrom(__DIR__ . '/../config/rupiah.php', 'rupiah');
        $this->app->bind('rupiah', function () {
            return new Rupiah;
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('RupiahFacade', RupiahFacade::class);
    }
}
