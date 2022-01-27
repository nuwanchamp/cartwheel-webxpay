<?php
namespace Sentech\PaymentWebxpay;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Event::listen('sales.invoice.save.after', 'Sentech\PaymentWebxpay\Listeners\Transaction@saveTransaction');
    }
}