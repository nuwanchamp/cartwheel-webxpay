<?php

namespace Sentech\PaymentWebxpay;

use Illuminate\Support\ServiceProvider;

class WebxpayServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerConfig();

    }
    public function boot(){
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        $this->app->register(EventServiceProvider::class);
    }

    private function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/src/Config/payment-methods.php', 'paymentmethods'
        );
        $this->mergeConfigFrom(
            dirname(__DIR__).'/src/Config/system.php', 'core'
        );
    }

}