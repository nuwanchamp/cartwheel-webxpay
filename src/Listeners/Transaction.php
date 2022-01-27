<?php

namespace Sentech\PaymentWebxpay\Listeners;

class Transaction
{
    public function __construct($a, $b)
    {
        dd($a, $b);
    }
    public function saveTransaction($invoice){
        dd($invoice);
    }
}